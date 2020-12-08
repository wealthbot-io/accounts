<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOauthClientsTable extends Migration
{
    /**
     * The database schema.
     *
     * @var \Illuminate\Database\Schema\Builder
     */
    protected $schema;

    /**
     * Create a new migration instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->schema = Schema::connection($this->getConnection());
    }

    /**
     * Get the migration connection name.
     *
     * @return string|null
     */
    public function getConnection()
    {
        return config('passport.storage.database.connection');
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('oauth_clients', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->nullable()->index();
            $table->string('name');
            $table->string('secret', 100)->nullable();
            $table->string('provider')->nullable();
            $table->text('redirect');
            $table->boolean('personal_access_client');
            $table->boolean('password_client');
            $table->boolean('revoked');
            $table->boolean('auto_authorize')->default(false);
            $table->timestamps();
        });

        $now = \Carbon\Carbon::now();
        $port = env('ACCOUNTS_HTTP_PORT', 12001);

        DB::table('oauth_clients')->insert([
            'id' => '9230e2f3-895b-4013-8c0e-602e4a55d708',
            'user_id' => 'd32e1b50-fcde-4b2b-908c-a93e781931ee', // webo default user id
            'name' => 'Wealthbot Webapp',
            'redirect' => "http://localhost:$port/auth/callback",
            'personal_access_client' => false,
            'password_client' => false,
            'revoked' => false,
            'auto_authorize' => true,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->schema->dropIfExists('oauth_clients');
    }
}
