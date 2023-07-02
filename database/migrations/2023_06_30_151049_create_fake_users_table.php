<?php
use App\Enums\FakeUserTitle;
use App\Enums\FakeUserGender;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fake_users', function (Blueprint $table) {
            $table->id();
            $table->enum('title', array_column(FakeUserTitle::cases(), 'value'))->index();
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', array_column(FakeUserGender::cases(), 'value'))->index();
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->date('date_of_birth');
            $table->string('phone');
            $table->string('nationality');
            $table->text('profile_picture');
            $table->text('address_street');
            $table->string('address_city');
            $table->string('address_state');
            $table->string('address_postcode');
            $table->string('address_country');
            $table->timestamps();

            $table->fulltext('first_name');
            $table->fulltext('last_name');
            $table->fulltext('email');
            $table->fulltext('nationality');
            $table->fulltext('username');
            $table->index('created_at');
            $table->index('updated_at');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fake_users');
    }
};
