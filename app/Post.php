<?php
  public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
          　$table->string('title');
         　 $table->text('content');
            $table->timestamps();
        }); 
    }
