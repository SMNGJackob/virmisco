<?php
	namespace sednasoft\virmisco\readlayer\valueobject;
	/**
	 * Do not edit. This class was automatically generated by codegen/read-layer/generator.php on
	 * 2016-01-13T22:53:08+01:00
	 */
	class OrganismTypeDesignation {
		/** @var null|string */
		protected $type_status = null;

		/**
		 * @param null|string $typeStatus
		 */
		public function __construct ($typeStatus = null) {
			$this->type_status = $typeStatus;
		}

		/**
		 * @return null|string
		 */
		public function getTypeStatus () {
			return $this->type_status;
		}
	}
