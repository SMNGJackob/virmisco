##
# @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
# @version 2015-12-07 (date of last modification)
# @since 2015-12-07 (date of creation)
# @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
##
# province
SELECT DISTINCT `location__province` `province`
FROM `gathering`
WHERE `location__country` = :country
ORDER BY `location__province`;
