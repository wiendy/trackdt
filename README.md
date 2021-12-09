# trackdt - Track Datatables
Library Editor Datatables for CodeIgniter 4

This is library for Editor datatables to run in CodeIgniter 4 environment

<h2>Install</h2>
<ol>
  <li>Install CI4 in correct directory and set database information in .env file<pre>composer create-project codeigniter4/appstarter --no-dev public_html</pre></li>
  <li>Copy Editor datatables to /app/ThirdParty/</li>
  <li>Create symlink eg: you have Editor datatables v1.9.6<pre>ln -s Editor-PHP-1.9.6 editor</pre></li>
  <li>Copy folder css and js from Datatables to /public_html/public/libraries/datatables/ (you can change it, 
    but correct the css and js links in the Views file OR just use CDN version in your Views)</li>
  <li>Copy folder css and js from Editor Datatables to /public_html/public/libraries/editor/ (you can change it, 
    but correct the css and js links in the Views file)</li>
  <li>Go to CI4 root directory (usualy public_html)</li>
  <li>Run command <pre>git clone https://github.com/wiendy/trackdt<br>cp trackdt/* ./ -r<br>rm trackdt -r</pre> 
    OR you can download manual and extract to CI4 folder structure respectively</li>
  <li>Create example database <pre>php spark migrate</pre></li>
  <li>Input example data <pre>php spark db:seed TrackdtSeeder</pre></li>
  <li>Go to browser, open URL http://yourdomain.com/data and http://yourdomain.com/dataeditor</li>
</ol>
