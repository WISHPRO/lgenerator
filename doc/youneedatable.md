## Create a table for example purpose only ###


Of course, to have a CRUD, you should have a table in the database.

Do you have one?
does not?
Then you can create this as an example to learn how to use the generator, of course you can try your own tables.

Just begin:

* create a file into `database/migrarions` called `2015_04_01_000000_create_employees_table.php`

* copy and paste this code: (warning: add the php tag at the begin of the file)

```php

	<?php

	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
		public function up()
		{
			Schema::create('employees', function(Blueprint $table)
			{
				$table->increments('id');
				$table->string('first_name');
				$table->string('last_name');
				$table->enum('gender', ['f', 'm']);
				$table->string('photo')->nullable();

				$table->date('date_of_birth')->nullable();
				$table->string('nacionality',3)->nullable();
				$table->string('city_of_birth')->nullable();

				$table->string('marital_status')->nullable();		

				$table->string('document_type')->nullable();
				$table->string('document_number')->nullable();
				$table->string('passport_number')->nullable();
				$table->string('ss_number')->nullable();

				$table->string('country_of_residence',3)->nullable();
				$table->string('city_of_residence')->nullable();
				$table->string('street_address')->nullable();
				$table->string('street_number')->nullable();
				$table->string('phone_number')->nullable();
				$table->string('celular_number')->nullable();
				$table->string('email_adress')->nullable();	

				$table->timestamps();
	
			});
		}

		/**
	 	* Reverse the migrations.
	 	*
	 	* @return void
	 	*/
		public function down()
		{
			Schema::drop('employees');
		}
	}

```

* run the migration

```bash
php artisan migrate
```

* you are ready to try... let's go



[home](../readme.md)