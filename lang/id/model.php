<?php

return [
    'letter' => [
        'agenda_number' => 'Nomor Agenda',
        'from' => 'Pengirim',
        'to' => 'Penerima',
        'reference_number' => 'Nomor Surat',
        'letter_date' => 'Tanggal Surat',
        'received_date' => 'Tanggal Diterima',
        'description' => 'Ringkasan',
        'note' => 'Keterangan',
        'dispose' => 'Disposisi Surat',
        'attachment' => 'Lampiran',
        'status' => [
            'all' => 'Semua',
            'disposed' => 'Ada Disposisi',
            'not_disposed' => 'Belum Disposisi',
        ],
        'classification_code' => 'Kode Klasifikasi',
    ],
    'disposition' => [
        'to' => 'Penerima',
        'content' => 'Isi Disposisi',
        'status' => 'Sifat Status',
        'note' => 'Catatan',
        'due_date' => 'Tenggat Waktu',
        'notice_me' => 'Disposisi untuk surat dengan nomor :reference_number.',
    ],
    'classification' => [
        'code' => 'Kode',
        'type' => 'Klasifikasi',
        'description' => 'Uraian',
    ],
    'status' => [
        'status' => 'Sifat Status',
    ],
    'user' => [
        'name' => 'Nama',
        'email' => 'Surel',
        'password' => 'Kata Sandi',
        'phone' => 'Nomor Telepon',
        'role' => 'Peran',
        'is_active' => 'Masih Aktif?',
        'picture' => 'Foto Profil',
        'admin' => 'Pengelola',
        'staff' => 'Staf',
        'active' => 'Aktif',
        'nonactive' => 'Nonaktif',
        'reset_password' => 'Setel ulang Kata Sandi menjadi bawaan?',
    ],
    'general' => [
        'created_at' => 'Dibuat pada',
        'updated_at' => 'Diperbarui pada',
        'deleted_at' => 'Dihapus pada',
        'created_by' => 'Dibuat oleh',
    ],
    'config' => [
        'default_password' => 'Kata Sandi Bawaan',
        'page_size' => 'Ukuran Halaman',
        'app_name' => 'Nama Aplikasi',
        'institution_name' => 'Nama Institusi',
        'institution_address' => 'Alamat Institusi',
        'institution_phone' => 'Nomor Telepon Institusi',
        'institution_email' => 'Surel Institusi',
        'language' => 'Bahasa',
        'pic' => 'Penanggungjawab'
    ],
];
