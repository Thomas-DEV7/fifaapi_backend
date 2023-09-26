 <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up()
        {
            Schema::create('players', function (Blueprint $table) {
                $table->id();
                $table->string('name', 100);
                $table->string('url_foto', 100);
                $table->integer('over');
                $table->string('team', 30);
                $table->string('nationality', 25);
                $table->string('position', 3);
                $table->json('skills');
                $table->timestamps(); 
            });
        }


        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('players');
        }
    };
