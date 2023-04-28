<?php

namespace App\Interfaces;

interface BaseResourceServiceInterface
{
    // all - create - store - show - edit - update - destroy
  public function all();
  public function store(array $data);
  public function show(int $id);
  public function edit(int $id);
  public function update(int $id, array $data);
  public function destroy(int $id);
}
