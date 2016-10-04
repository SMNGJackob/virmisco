##
# @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
# @version 2015-12-06 (date of last modification)
# @since 2015-12-06 (date of creation)
# @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
##
# genus
SELECT DISTINCT `sn`.`genus`
FROM `scientific_name` `sn`
	LEFT JOIN `organism` `o` USING (`specimen_carrier_id`, `sequence_number`)
WHERE `o`.`higher_taxa` LIKE concat('% ', :taxon) or `o`.`higher_taxa` LIKE concat('% ', :taxon, ' %');
