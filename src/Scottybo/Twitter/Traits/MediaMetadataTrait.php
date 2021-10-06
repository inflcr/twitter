<?php namespace Scottybo\Twitter\Traits;

use BadMethodCallException;

Trait MediaMetadataTrait {

	/**
	 * This endpoint can be used to provide additional information about the uploaded media_id. This feature is currently only supported for images and GIFs.
	 *
	 * Parameters :
	 * - media_id
	 * - alt_text
	 */
	public function postMediaMetadata($parameters = [])
	{
		$this->tconfig['API_URL'] = 'upload.twitter.com';

		return $this->post('media/metadata/create', $parameters, true);
	}

}
