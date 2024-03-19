
1. **Download and Extract EventStore:**
   - Download the EventStore folder.
  
2. **Paste into XAMPP `htdocs` folder:**
   - Locate your XAMPP installation directory.
   - Inside it, find the `htdocs` folder.
   - Paste the entire extracted EventStore folder into the `htdocs` folder.

3. **Download and Rename Admin Template:**
   - Download the Bootstrap 4 HTML 5 Admin Dashboard template from [here](https://themewagon.com/themes/free-bootstrap-4-html-5-admin-dashboard-website-template-ruang/).
   - After downloading, paste the contents to the folder "admin".

4. **Extract "eventstore(10)" inside EventStore folder:**
   - Inside the EventStore folder, extract the contents of the "eventstore(10)" ZIP file.

5. **Import SQL file to MySQL:**
   - Open the MySQL admin panel in XAMPP (`http://localhost/phpmyadmin/`).
   - Inside the "eventstore" database, import the SQL file from the extracted "eventstore" folder.

6. **Access in Browser:**
   - Open a web browser.
   - Type the following URL: `localhost/eventstore/admin/index.php`.

These steps should help you set up the EventStore application with XAMPP version 1.8.2-2. Adjustments may be necessary based on the actual folder structures and configurations.
