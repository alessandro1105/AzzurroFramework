<?php
/*
	SessionService (session) service

	- service that permits to access and handle cookies


	---- Changelog ---
	Rev 1.0 - November 20th, 2017
			- Basic functionality


	Copyright 2017 Alessandro Pasqualini
	Licensed under the Apache License, Version 2.0 (the "License");
	you may not use this file except in compliance with the License.
	You may obtain a copy of the License at
    	http://www.apache.org/licenses/LICENSE-2.0
	Unless required by applicable law or agreed to in writing, software
	distributed under the License is distributed on an "AS IS" BASIS,
	WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	See the License for the specific language governing permissions and
	limitations under the License.

	@author    Alessandro Pasqualini <alessandro.pasqualini.1105@gmail.com>
	@url       https://github.com/alessandro1105
*/

	// Strict type hint
	declare(strict_types = 1);

	namespace AzzurroFramework\Core\Modules\AF\Superglobal\Session;

	use \InvalidArgumentException;


	//--- SessionService service ----
	final class SessionService {

		// Cookie superglobal array
		private $session;


		// Contructor
		public function __construct() {
			// Saving the reference to the $_COOKIE array
			$this->session = &$_SESSION;
		}

		// Return the requested cookie
		public function get(string $name) {
			return $this->session[$name];
		}

		// Check if the requested cookie exists
		public function isSet(string $name) {
			return isset($this->session[$name]);
		}

		// Start the session
		public function start($options = []) {
			// Start the session
			session_start($options);
		}

	}