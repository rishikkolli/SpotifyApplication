# User Manual
## Setup
### Installation:
1. [https://www.youtube.com/watch?v=AvYgmGS2pG0&t=248s](https://www.youtube.com/watch?v=AvYgmGS2pG0&t=248s)
2. [https://www.youtube.com/watch?v=jtfDR_0Jgh4](https://www.youtube.com/watch?v=jtfDR_0Jgh4)

Go to apachefriends.org and click the button to download the latest version of XAMPP. Run the installer and click ‘Next’ on the Setup Wizard. Select Apache, MySQL, PHP, and phpMyAdmin and unselect everything else. Select the default option for location of the installation folder and click Next until you finish installing. Click Cancel on the Firewall popup because we’re just using Apache for local developments. Finish up the installation. 
1. On the XAMPP control panel, click the Start button next to both Apache and MySQL to start up both services. Click Cancel on the popup because we’re just using MySQL for local developments.
2. Click the Apache Config button on the XAMPP control panel and open up the php.ini file. Ctrl+F ‘pgsql’ and remove the semicolon in front of the ;extension=pdo_psql file. Save the file and restart Apache by clicking Stop and then Start again.
3. Click the Admin button next to Apache, and on the dashboard, click the phpMyAdmin button in the upper right corner. Go back to the XAMPP control panel and click on the Explorer button. Open up the htdocs directory in the XAMPP folder and open up the index.php file. 
4. Ensure all your files are within the htdocs folder within the xampp application. Create and store all new php and html files within.

## Loading Data within PHP MyAdmin

With PHP MyAdmin, you can import your data with SQL queries. Go ahead and create a database of your choosing with a database name, username, and password. Afterwards go and find your database by clicking the database you just created.
1. Afterwards import the “luke.sql” file into Php MyAdmin. Go ahead and locate the import button and drop the file from your local storage. 

If everything is imported correctly, you can find the song table within your PhpMyadmin and be able to see all the different songs and streams within different regions. Be aware there might be duplicates because certain songs were global hits through different regions.

## User Interface

1. Regions Best Song Feature (Query)  
    1. Choose a region from the list 
    2. Click SEARCH.
2. Click RETURN HOME to return back to the homepage.
    1. All Time Artists Feature (Query)
    2. Click SEARCH.
    3. Click RETURN HOME to return back to the homepage.
3. Years Best Feature (Query)
    1. Click on the SEARCH button.
    2. Songs from Artist Feature (Query)
4. Enter an artist name into the text field.
    1. Click SEARCH.
    2. Click RETURN HOME to return back to the homepage.
5. Artists Total Streams Feature (Query)
    1. Choose an artist from the list.
    2. Click SEARCH.
    3. Click RETURN HOME to return back to the homepage.
6. Regional Artist Streams Feature (Query)
    1. Choose an artist from the list.
    2. Choose a region from the list.
    3. Click SEARCH.
    4. Click RETURN HOME to return back to the homepage.
