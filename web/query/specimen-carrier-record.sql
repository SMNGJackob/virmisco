##
# @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
# @version 2015-11-02 (date of last modification)
# @since 2015-11-02 (date of creation)
# @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
##
# id
# gatheringId
# carrierNumber
# preparationType
# owner
# previousCollection
# labelTranscript
SELECT
	`sc`.`id`,
	`sc`.`gathering_id` `gatheringId`,
	`sc`.`carrier_number` `carrierNumber`,
	`sc`.`preparation_type` `preparationType`,
	`sc`.`owner`,
	`sc`.`previous_collection` `previousCollection`,
	`sc`.`label_transcript` `labelTranscript`
FROM `specimen_carrier` `sc`
WHERE `sc`.`id` = ?;
