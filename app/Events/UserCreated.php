<?php namespace A3LWebInterface\Events;

use A3LWebInterface\Events\Event;

use Illuminate\Queue\SerializesModels;

class UserCreated extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct($model, $comment)
	{
		$this->model = $model;
		$this->action = 'CREATE';
		$this->comment = $comment;
	}

}
