<?php
	namespace sednasoft\virmisco\readlayer\valueobject;
	/**
	 * Do not edit. This class was automatically generated by codegen/read-layer/generator.php on
	 * 2016-01-13T22:53:08+01:00
	 */
	class FocalPlaneImageHistogramSettings {
		/** @var integer|null */
		protected $black_clip = null;
		/** @var double|null */
		protected $gamma = null;
		/** @var integer|null */
		protected $white_clip = null;

		/**
		 * @param double|null $gamma
		 * @param integer|null $blackClip
		 * @param integer|null $whiteClip
		 */
		public function __construct ($gamma = null, $blackClip = null, $whiteClip = null) {
			$this->gamma = $gamma;
			$this->black_clip = $blackClip;
			$this->white_clip = $whiteClip;
		}

		/**
		 * @return integer|null
		 */
		public function getBlackClip () {
			return $this->black_clip;
		}

		/**
		 * @return double|null
		 */
		public function getGamma () {
			return $this->gamma;
		}

		/**
		 * @return integer|null
		 */
		public function getWhiteClip () {
			return $this->white_clip;
		}
	}
