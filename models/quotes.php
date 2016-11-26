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
			],
			'104' => [
				'id' => 104,
				'text' => "Wag magmadali, para hindi magkamali, sabi nga nila, The best things in life comes to those who wait patiently",
				'image_url' => "http://4.bp.blogspot.com/-hgyFTsor_ME/VPmcXYflrQI/AAAAAAAAA6k/9lUYUpmQwqA/s1600/1.png"
			],
			'105' => [
				'id' => 105,
				'text' => "If you want to be part of my life, make sure you are ready to",
				'image_url' => "https://s-media-cache-ak0.pinimg.com/564x/af/9c/5e/af9c5ec6594bf28a8d5e733024fc5be7.jpg"
			],
			'106' => [
				'id' => 106,
				'text' => "Buti pa yung website mayroong dollar at PHP. Ako wala!",
				'image_url' => "https://scontent.fceb2-1.fna.fbcdn.net/t31.0-8/14556688_686111261548025_4500024511752286179_o.png"
			],
		);
	}
}