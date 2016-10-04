<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2015-11-11 (date of last modification)
     * @since 2015-11-11 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    namespace sednasoft\virmisco\util;

    class CustomLasDecorator extends AbstractTechnicalDatasetDecorator
    {
        /**
         * @param int $imageIndex
         * @return int
         */
        public function getCameraActivePixelsHor($imageIndex)
        {
            return 2048;
        }

        /**
         * @param int $imageIndex
         * @return int
         */
        public function getCameraActivePixelsVer($imageIndex)
        {
            return 1536;
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getCameraAdcResolution($imageIndex)
        {
            return '10-bit, on-chip';
        }

        /**
         * @param int $imageIndex
         * @return float
         */
        public function getCameraChipHeight($imageIndex)
        {
            return 4.92e-3;
        }

        /**
         * @param int $imageIndex
         * @return float
         */
        public function getCameraChipWidth($imageIndex)
        {
            return 6.55e-3;
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getCameraColorFilterArray($imageIndex)
        {
            return 'RGB Bayer pattern';
        }

        /**
         * @param int $imageIndex
         * @return int
         */
        public function getCameraDynamicRange($imageIndex)
        {
            return 61;
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getCameraMaker($imageIndex)
        {
            return 'Leica';
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getCameraOpticalFormat($imageIndex)
        {
            return '1/2-inch (4:3)';
        }

        /**
         * @param int $imageIndex
         * @return float
         */
        public function getCameraPixelHeight($imageIndex)
        {
            return 3.2e-6;
        }

        /**
         * @param int $imageIndex
         * @return float
         */
        public function getCameraPixelWidth($imageIndex)
        {
            return 3.2e-6;
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getCameraProtectiveColorFilter($imageIndex)
        {
            return 'Hoya CM500S (IR cut-coating filter at 650 nm)';
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getCameraReadoutNoise($imageIndex)
        {
            return '1.8 LSB (10 bit) typical';
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getCameraSensorArticleOrSerialNumber($imageIndex)
        {
            return 'MT9T001P12STC';
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getCameraSensorMaker($imageIndex)
        {
            return 'Aptina';
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getCameraSensorName($imageIndex)
        {
            return 'MT9T001';
        }

        /**
         * @param int $imageIndex
         * @return int
         */
        public function getCameraSnrMax($imageIndex)
        {
            return 43;
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getMicroscopeCameraMountAdapterArticleOrSerialNumber($imageIndex)
        {
            return '11541544';
        }

        /**
         * @param int $imageIndex
         * @return float
         */
        public function getMicroscopeCameraMountAdapterMagnification($imageIndex)
        {
            return 0.55;
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getMicroscopeCameraMountAdapterMaker($imageIndex)
        {
            return 'Leica';
        }

        /**
         * @param int $imageIndex
         * @return null
         */
        public function getMicroscopeCameraMountAdapterName($imageIndex)
        {
            return null;
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getMicroscopeCondenserMaker($imageIndex)
        {
            return 'Leica';
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getMicroscopeCondenserTurretPrismMaker($imageIndex)
        {
            return 'Leica';
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getMicroscopeDicTurretPrismMaker($imageIndex)
        {
            return 'Leica';
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getMicroscopeMagnificationChangerMaker($imageIndex)
        {
            return 'Leica';
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getMicroscopeNosepieceObjectiveMaker($imageIndex)
        {
            return 'Leica';
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getMicroscopePortsMaker($imageIndex)
        {
            return 'Leica';
        }

        /**
         * @param int $imageIndex
         * @return null
         */
        public function getMicroscopeSettingsDicPrismPosition($imageIndex)
        {
            return null;
        }

        /**
         * @param int $imageIndex
         * @return string
         */
        public function getMicroscopeStandMaker($imageIndex)
        {
            return 'Leica';
        }
    }