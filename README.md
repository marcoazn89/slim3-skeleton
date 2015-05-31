====================
Clone the repo
====================
.. code-block:: bash
git clone https://github.com/marcoazn89/slim3-skeleton.git <folder name>


====================
Install Dependencies
====================
.. code-block:: bash
    composer install

====================
File Structure
====================
/app
	|
	|-------/controllers 		//Place to put controllers to handle all the data, functions, etc.
			/lib				//Place to put your own libraries
			/models				//Place to put the models that interact with the database
			/views 				//Place to put the view files
			bootstrap.php 		//This is what wires the app
			config.php 			//Here's where you would put the configurations to be used in the app
			depedencies.php 	//Here you add your depedencies
			middleware.php 		//Here you add the middlewares
			routes.php 			//Here you declare the routes
/public
	|
	|-------.htaccess			//URL rewrite happens here
			index.php 			//All the main files get put together here. You app starts in this file.
/logs


====================
Running the code
====================
http:/<your url>/public/hello/<random name here>

Ideally you want to configure your VHOST to point to /public/index.php:

http://docs.slimframework.com/routing/rewrite/#apache-and-mod_rewrite
