<?php
/**
 * This file is part of the bee4/httpclient package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Bee4 2014
 * @author	Stephane HULARD <s.hulard@chstudio.fr>
 * @package Bee4\Http\Message
 */

namespace Bee4\Http\Message;

/**
 * Transport Message interface
 * Define a model for transport communication object
 * @package Bee4\Http\Message
 */
interface MessageInterface
{
	/**
	 * Add a header to the message
	 * @param string $name
	 * @param string $value
	 */
	public function addHeader($name, $value);

	/**
	 * Add multiple headers at once
	 * @param array $headers
	 */
	public function addHeaders( array $headers );

	/**
	 * Check if current message has requested header
	 * @param string $name
	 * @return boolean
	 */
	public function hasHeader($name);

	/**
	 * Get a header by name
	 * @param string $name
	 * @return string
	 */
	public function getHeader($name);

	/**
	 * Get all headers at once in an array
	 * @return array
	 */
	public function getHeaders();

	/**
	 * Remove a header by name
	 * @param string $name
	 */
	public function removeHeader($name);

	/**
	 * Remove all headers at once
	 */
	public function removeHeaders();
}