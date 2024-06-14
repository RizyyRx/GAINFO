Website link: https://gainfo.selfmade.one/

SQL VULNERABILITY EXPLANATION
 * Above sql query is vulnerable, since its not sanitized, it can be manipulated in user input fields.
 * A sample sql injection attack input is embraced in <> below 
 * <test%' OR '1'='1' -- >
 * The OR '1'='1' operator will always return true and -- will comment out rest of the code, resulting in dropping all the items in Database table
 * <test' OR (backtick here)id(backtick here)='3' -- > This input will fetch exactly the item with id '3' on the table
