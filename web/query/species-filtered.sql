##
# @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
# @version 2015-12-06 (date of last modification)
# @since 2015-12-06 (date of creation)
# @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
##
# genus
# subgenus
# specificEpithet
# infraspecificEpithet
SELECT DISTINCT
	`genus`,
	`subgenus`,
	`specific_epithet` `specificEpithet`,
	`infraspecific_epithet` `infraspecificEpithet`
FROM `scientific_name`
WHERE `genus` = :genus;
