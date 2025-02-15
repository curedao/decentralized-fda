<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOaAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oa_access_tokens', function (Blueprint $table) {
            $table->foreign(['client_id'], 'access_tokens_client_id_fk')->references(['client_id'])->on('oa_clients');
            $table->foreign(['client_id'], 'oa_access_tokens_client_id_fk')->references(['client_id'])->on('oa_clients');
            $table->foreign(['user_id'], 'oa_access_tokens_user_id_fk')->references(['ID'])->deferrable()->on('wp_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oa_access_tokens', function (Blueprint $table) {
            $table->dropForeign('access_tokens_client_id_fk');
            $table->dropForeign('oa_access_tokens_client_id_fk');
            $table->dropForeign('oa_access_tokens_user_id_fk');
        });
    }
}
