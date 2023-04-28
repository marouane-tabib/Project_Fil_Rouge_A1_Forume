<?php

namespace App\Interfaces;

interface BaseResourceServiceInterface
{
  public function all();
  public function store(array $data);
  public function show(int $id);
  public function edit(int $id);
  public function update(int $id, array $data);
  public function destroy(int $id);
}
