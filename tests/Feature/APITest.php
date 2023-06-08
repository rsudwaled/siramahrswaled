<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class APITest extends TestCase
{
    /**
     * @test
     */
    public function cari_pasien(): void
    {
        $response = $this->get(route('cari_pasien'));
        $response->assertStatus(200);
    }
    /**
     * @test
     */
    public function poliklinik_aktif(): void
    {
        $response = $this->get(route('poliklinik_aktif'));
        $response->assertStatus(200);
    }
    /**
     * @test
     */
    public function cari_jadwal_dokter(): void
    {
        $response = $this->get(route('cari_jadwal_dokter'));
        $response->assertStatus(200);
    }
        /**
     * @test
     */
    public function ambil_antrian(): void
    {
        $response = $this->get(route('ambil_antrian'));
        $response->assertStatus(200);
    }
        /**
     * @test
     */
    public function batal_antrian(): void
    {
        $response = $this->get(route('batal_antrian'));
        $response->assertStatus(200);
    }
        /**
     * @test
     */
    public function rujukan_peserta(): void
    {
        $response = $this->get(route('rujukan_peserta'));
        $response->assertStatus(200);
    }
        /**
     * @test
     */
    public function rujukan_rs_peserta(): void
    {
        $response = $this->get(route('rujukan_rs_peserta'));
        $response->assertStatus(200);
    }
            /**
     * @test
     */
    public function suratkontrol_peserta(): void
    {
        $response = $this->get(route('suratkontrol_peserta'));
        $response->assertStatus(200);
    }
}
