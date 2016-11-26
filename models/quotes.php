<?php

class Quotes {

	/**
	 * Return data by id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function getById($id)
	{
		$data = $this->masterData();
		return $data[$id];
	}

	/**
	 * Return master data
	 * @return [type] [description]
	 */
	function masterData()
	{
		return array(
			'101' => [
				'id' => 101,
				'text' => "Never give up on a dream just because of the time it will take to accomplish it. The time will pass anyway",
				'image_url' => "http://addicted2success.com/wp-content/uploads/2013/12/accomplish-dreams-picture-quote.jpg"
			],
			'102' => [
				'id' => 102,
				'text' => "What you think of yourself is much more important than what people think of you",
				'image_url' => "http://addicted2success.com/wp-content/uploads/2013/12/picture-quote-think-of-yourself.jpg"
			],
			'103' => [
				'id' => 103,
				'text' => "Its funny how the people that hurt you the most are the ones that swore they never would",
				'image_url' => "http://picpulp.com/wp-content/uploads/2013/03/trust-quotes-14.jpg"
			]
		);
	}
}