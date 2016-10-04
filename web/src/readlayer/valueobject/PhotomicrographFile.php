<?php
	namespace sednasoft\virmisco\readlayer\valueobject;
	/**
	 * Do not edit. This class was automatically generated by codegen/read-layer/generator.php on
	 * 2016-01-13T22:53:08+01:00
	 */
	class PhotomicrographFile {
		/** @var null|string */
		protected $creation_time = null;
		/** @var null|string */
		protected $modification_time = null;
		/** @var null|string */
		protected $real_path = null;
		/** @var null|string */
		protected $uri = null;

		/**
		 * @param null|string $realPath
		 * @param null|string $uri
		 * @param null|string $creationTime
		 * @param null|string $modificationTime
		 */
		public function __construct ($realPath = null, $uri = null, $creationTime = null, $modificationTime = null) {
			$this->real_path = $realPath;
			$this->uri = $uri;
			$this->creation_time = $creationTime;
			$this->modification_time = $modificationTime;
		}

		/**
		 * @return null|string
		 */
		public function getCreationTime () {
			return $this->creation_time;
		}

		/**
		 * @return null|string
		 */
		public function getModificationTime () {
			return $this->modification_time;
		}

		/**
		 * @return null|string
		 */
		public function getRealPath () {
			return $this->real_path;
		}

		/**
		 * @return null|string
		 */
		public function getUri () {
			return $this->uri;
		}
	}
