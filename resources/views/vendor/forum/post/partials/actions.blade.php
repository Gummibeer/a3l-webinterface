<div class="panel panel-default" data-actions>
    <div class="panel-heading">
        <span class="glyphicon glyphicon-option-vertical"></span>
        <a href="#" data-toggle="collapse" data-target=".collapse">{{ trans('forum::posts.actions') }}</a>
    </div>
    <div class="collapse">
        <div class="panel-body">
            <div class="form-group">
                <label for="action">{{ trans_choice('forum::general.actions', 1) }}</label>
                <select name="action" id="action" class="form-control">
                    @can ('delete', $post)
                        <option value="delete" data-confirm="true" data-method="delete">{{ trans('forum::general.delete') }}</option>
                    @endcan
                </select>
            </div>
        </div>
        <div class="panel-footer clearfix">
            <button type="submit" class="btn btn-default pull-right">{{ trans('forum::general.proceed') }}</button>
        </div>
    </div>
</div>
