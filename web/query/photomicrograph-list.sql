##
# @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
# @version 2015-11-12 (date of last modification)
# @since 2015-11-03 (date of creation)
# @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
##
# id
# organismId
# title
# detailOfPhotomicrographId
# detailOfHotspotX
# detailOfHotspotY
# creatorCapturing
# creatorProcessing
# fileRealPath
# fileUri
# fileCreationTime
# fileModificationTime
# presentationUri
# digitizationDataWidth
# digitizationDataHeight
# digitizationDataColorDepth
# digitizationDataReproductionScaleHorizontal
# digitizationDataReproductionScaleVertical
# cameraCameraMaker
# cameraCameraName
# cameraCameraArticleOrSerialNumber
# cameraSensorMaker
# cameraSensorName
# cameraSensorArticleOrSerialNumber
# cameraOpticalFormat
# cameraCaptureFormat
# cameraChipWidth
# cameraChipHeight
# cameraPixelWidth
# cameraPixelHeight
# cameraActivePixelsHor
# cameraActivePixelsVer
# cameraColorFilterArray
# cameraProtectiveColorFilter
# cameraAdcResolution
# cameraDynamicRange
# cameraSnrMax
# cameraReadoutNoise
# microscopeStandMaker
# microscopeStandName
# microscopeStandArticleOrSerialNumber
# microscopeCondenserMaker
# microscopeCondenserName
# microscopeCondenserArticleOrSerialNumber
# microscopeCondenserTurretPrismMaker
# microscopeCondenserTurretPrismName
# microscopeCondenserTurretPrismArticleOrSerialNumber
# microscopeNosepieceObjectiveMaker
# microscopeNosepieceObjectiveName
# microscopeNosepieceObjectiveArticleOrSerialNumber
# microscopeNosepieceObjectiveType
# microscopeNosepieceObjectiveNumericalAperture
# microscopeNosepieceObjectiveMagnification
# microscopeDicTurretPrismMaker
# microscopeDicTurretPrismName
# microscopeDicTurretPrismArticleOrSerialNumber
# microscopeMagnificationChangerMaker
# microscopeMagnificationChangerName
# microscopeMagnificationChangerArticleOrSerialNumber
# microscopePortsMaker
# microscopePortsName
# microscopePortsArticleOrSerialNumber
# microscopeCameraMountAdapterMaker
# microscopeCameraMountAdapterName
# microscopeCameraMountAdapterMagnification
# microscopeCameraMountAdapterArticleOrSerialNumber
# microscopeSettingsContrastMethod
# microscopeSettingsDicPrismPosition
# microscopeSettingsApertureDiaphragmOpening
# microscopeSettingsFieldDiaphragmOpening
# microscopeSettingsMagnificationChangerMagnification
SELECT
	`p`.`id`,
	`p`.`organism_id` `organismId`,
	`p`.`title`,
	`p`.`detail_of__photomicrograph_id` `detailOfPhotomicrographId`,
	`p`.`detail_of__hotspot__x` `detailOfHotspotX`,
	`p`.`detail_of__hotspot__y` `detailOfHotspotY`,
	`p`.`creator_capturing` `creatorCapturing`,
	`p`.`creator_processing` `creatorProcessing`,
	`p`.`file__real_path` `fileRealPath`,
	`p`.`file__uri` `fileUri`,
	`p`.`file__creation_time` `fileCreationTime`,
	`p`.`file__modification_time` `fileModificationTime`,
	`p`.`presentation_uri` `presentationUri`,
	`p`.`digitization_data__width` `digitizationDataWidth`,
	`p`.`digitization_data__height` `digitizationDataHeight`,
	`p`.`digitization_data__color_depth` `digitizationDataColorDepth`,
	`p`.`digitization_data__reproduction_scale_horizontal` `digitizationDataReproductionScaleHorizontal`,
	`p`.`digitization_data__reproduction_scale_vertical` `digitizationDataReproductionScaleVertical`,
	`p`.`camera__camera_maker` `cameraCameraMaker`,
	`p`.`camera__camera_name` `cameraCameraName`,
	`p`.`camera__camera_article_or_serial_number` `cameraCameraArticleOrSerialNumber`,
	`p`.`camera__sensor_maker` `cameraSensorMaker`,
	`p`.`camera__sensor_name` `cameraSensorName`,
	`p`.`camera__sensor_article_or_serial_number` `cameraSensorArticleOrSerialNumber`,
	`p`.`camera__optical_format` `cameraOpticalFormat`,
	`p`.`camera__capture_format` `cameraCaptureFormat`,
	`p`.`camera__chip_width` `cameraChipWidth`,
	`p`.`camera__chip_height` `cameraChipHeight`,
	`p`.`camera__pixel_width` `cameraPixelWidth`,
	`p`.`camera__pixel_height` `cameraPixelHeight`,
	`p`.`camera__active_pixels_hor` `cameraActivePixelsHor`,
	`p`.`camera__active_pixels_ver` `cameraActivePixelsVer`,
	`p`.`camera__color_filter_array` `cameraColorFilterArray`,
	`p`.`camera__protective_color_filter` `cameraProtectiveColorFilter`,
	`p`.`camera__adc_resolution` `cameraAdcResolution`,
	`p`.`camera__dynamic_range` `cameraDynamicRange`,
	`p`.`camera__snr_max` `cameraSnrMax`,
	`p`.`camera__readout_noise` `cameraReadoutNoise`,
	`p`.`microscope__stand_maker` `microscopeStandMaker`,
	`p`.`microscope__stand_name` `microscopeStandName`,
	`p`.`microscope__stand_article_or_serial_number` `microscopeStandArticleOrSerialNumber`,
	`p`.`microscope__condenser_maker` `microscopeCondenserMaker`,
	`p`.`microscope__condenser_name` `microscopeCondenserName`,
	`p`.`microscope__condenser_article_or_serial_number` `microscopeCondenserArticleOrSerialNumber`,
	`p`.`microscope__condenser_turret_prism_maker` `microscopeCondenserTurretPrismMaker`,
	`p`.`microscope__condenser_turret_prism_name` `microscopeCondenserTurretPrismName`,
	`p`.`microscope__condenser_turret_prism_article_or_serial_number` `microscopeCondenserTurretPrismArticleOrSerialNumber`,
	`p`.`microscope__nosepiece_objective_maker` `microscopeNosepieceObjectiveMaker`,
	`p`.`microscope__nosepiece_objective_name` `microscopeNosepieceObjectiveName`,
	`p`.`microscope__nosepiece_objective_article_or_serial_number` `microscopeNosepieceObjectiveArticleOrSerialNumber`,
	`p`.`microscope__nosepiece_objective_type` `microscopeNosepieceObjectiveType`,
	`p`.`microscope__nosepiece_objective_numerical_aperture` `microscopeNosepieceObjectiveNumericalAperture`,
	`p`.`microscope__nosepiece_objective_magnification` `microscopeNosepieceObjectiveMagnification`,
	`p`.`microscope__dic_turret_prism_maker` `microscopeDicTurretPrismMaker`,
	`p`.`microscope__dic_turret_prism_name` `microscopeDicTurretPrismName`,
	`p`.`microscope__dic_turret_prism_article_or_serial_number` `microscopeDicTurretPrismArticleOrSerialNumber`,
	`p`.`microscope__magnification_changer_maker` `microscopeMagnificationChangerMaker`,
	`p`.`microscope__magnification_changer_name` `microscopeMagnificationChangerName`,
	`p`.`microscope__magnification_changer_article_or_serial_number` `microscopeMagnificationChangerArticleOrSerialNumber`,
	`p`.`microscope__ports_maker` `microscopePortsMaker`,
	`p`.`microscope__ports_name` `microscopePortsName`,
	`p`.`microscope__ports_article_or_serial_number` `microscopePortsArticleOrSerialNumber`,
	`p`.`microscope__camera_mount_adapter_maker` `microscopeCameraMountAdapterMaker`,
	`p`.`microscope__camera_mount_adapter_name` `microscopeCameraMountAdapterName`,
	`p`.`microscope__camera_mount_adapter_magnification` `microscopeCameraMountAdapterMagnification`,
	`p`.`microscope__camera_mount_adapter_article_or_serial_number` `microscopeCameraMountAdapterArticleOrSerialNumber`,
	`p`.`microscope_settings__contrast_method` `microscopeSettingsContrastMethod`,
	`p`.`microscope_settings__dic_prism_position` `microscopeSettingsDicPrismPosition`,
	`p`.`microscope_settings__aperture_diaphragm_opening` `microscopeSettingsApertureDiaphragmOpening`,
	`p`.`microscope_settings__field_diaphragm_opening` `microscopeSettingsFieldDiaphragmOpening`,
	`p`.`microscope_settings__magnification_changer_magnification` `microscopeSettingsMagnificationChangerMagnification`
FROM `photomicrograph` `p`;
