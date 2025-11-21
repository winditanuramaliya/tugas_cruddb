public function up(): void 
{ 
    Schema::create('menus', function (Blueprint $table) { 
        $table->id(); 
        $table->string('nama_menu'); 
        $table->string('foto')->nullable(); 
        $table->decimal('harga', 10, 2); 
        $table->timestamps(); 
    }); 
} 