<?php
namespace App\Libs;

use Collective\Html\FormBuilder as CollectiveFormBuilder;

class FormBuilder extends CollectiveFormBuilder
{
    public function input($type, $name, $value = null, $options = [])
    {
        $options['id'] = $this->getId($options, $type, $name);
        $options['class'] = $this->getClass($options, 'form-control');
        $icon = array_get($options, 'icon', null);
        $errors = array_get($options, 'errors', []);
        $container = array_get($options, 'container', true);

        return $this->constructHtml(parent::input($type, $name, $value, $this->clearOptions($options)), $icon, $errors, $container);
    }

    public function submit($value = null, $options = [])
    {
        $options['type'] = 'submit';
        $options['class'] = $this->getClass($options, 'btn');
        return $this->button($value, $options);
    }

    public function checkbox($name, $value = 1, $checked = null, $options = [])
    {
        $options['id'] = $this->getId($options, 'checkbox', $name);
        $options['class'] = $this->getClass($options, 'icheck');

        $html = '<div class="am-checkbox">';
        $html .= parent::checkbox($name, $value, $checked, $options);
        $html .= $this->label($options['id'], array_get($options, 'label'));
        $html .= '</div>';
        return $html;
    }

    public function label($name, $value = null, $options = [])
    {
        if(!empty($name) && !empty($value)) {
            return parent::label($name, $value, $options);
        } else {
            return '';
        }
    }

    protected function checkable($type, $name, $value, $checked, $options)
    {
        $options['container'] = false;
        return parent::checkable($type, $name, $value, $checked, $options);
    }

    protected function constructHtml($input, $icon = null, $errors = [], $container = true)
    {
        if(!$container) return $input;

        $html = '';
        $html .= '<div class="form-group">';
        $html .= empty($icon) ? '' : '<div class="input-group">';
        $html .= empty($icon) ? '' : '<span class="input-group-addon"><i class="icon ' . $icon . '"></i></span>';
        $html .= $input;
        $html .= empty($icon) ? '' : '</div>';
        if (!empty($errors)) {
            $html .= '<ul class="parsley-errors-list filled">';
            foreach ($errors as $error) {
                $html .= '<li>' . $error . '</li>';
            }
            $html .= '</ul>';
        }
        $html .= '</div>';
        return $html;
    }

    private function getId($options, $type, $name)
    {
        return array_get($options, 'id', camel_case($type.'-field-'.$name));
    }

    protected function getClass(array $options, $defaults)
    {
        $defaults = is_string($defaults) ? explode(' ', $defaults) : $defaults;
        $classes = collect(explode(' ', array_get($options, 'class', '')));
        foreach($defaults as $default) {
            $classes->push($default);
        }
        return $classes->unique()->sort()->implode(' ');
    }

    protected function clearOptions(array $options)
    {
        unset($options['icon']);
        unset($options['errors']);
        unset($options['container']);
        return $options;
    }
}