##
# @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
# @version 2015-11-02 (date of last modification)
# @since 2015-11-02 (date of creation)
# @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
##
# id
# journalNumber
# country
# province
# region
# place
# person
# organization
# dateAfter
# dateBefore
# remarks
SELECT
	`g`.`id`,
	`g`.`journal_number` `journalNumber`,
	`g`.`location__country` `country`,
	`g`.`location__province` `province`,
	`g`.`location__region` `region`,
	`g`.`location__place` `place`,
	`g`.`agent__person` `person`,
	`g`.`agent__organization` `organization`,
	`g`.`sampling_date__after` `dateAfter`,
	`g`.`sampling_date__before` `dateBefore`,
	`g`.`remarks`
FROM `gathering` `g`
WHERE `g`.`id` = ?;
