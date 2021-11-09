# type_b
Projet présidence-Formulaire type B

# to generate database tables please run
php artisan migrate

# once the tables are created comment the following line when found in the migration files
Schema::disableForeignKeyConstraints();
