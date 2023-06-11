<?php

/**
 * validation.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


declare(strict_types=1);

return [
    'missing_where'                  => 'Array is missing "where"-clause',
    'missing_update'                 => 'Array is missing "update"-clause',
    'invalid_where_key'              => 'JSON contains an invalid key for the "where"-clause',
    'invalid_update_key'             => 'JSON contains an invalid key for the "update"-clause',
    'invalid_query_data'             => 'There is invalid data in the %s:%s field of your query.',
    'invalid_query_account_type'     => 'Your query contains accounts of different types, which is not allowed.',
    'invalid_query_currency'         => 'Your query contains accounts that have different currency settings, which is not allowed.',
    'iban'                           => 'Ini bukan IBAN yang valid.',
    'zero_or_more'                   => 'Nilai tidak bisa negatif.',
    'date_or_time'                   => 'Nilainya harus berupa nilai tanggal atau waktu yang valid (ISO 8601).',
    'source_equals_destination'      => 'Akun sumber sama dengan akun tujuan.',
    'unique_account_number_for_user' => 'Sepertinya nomor rekening ini sudah digunakan.',
    'unique_iban_for_user'           => 'Sepertinya nomor rekening ini sudah digunakan.',
    'deleted_user'                   => 'Kerena kendala keamanan, anda tidak bisa mendaftar menggunkan alamat email ini.',
    'rule_trigger_value'             => 'Nilai ini tidak validi untuk trigger yang dipilih.',
    'rule_action_value'              => 'Nilai ini tidak valid untuk tindakan yang dipilih.',
    'file_already_attached'          => 'Upload file ";name" sudah terpasang pada objek ini.',
    'file_attached'                  => 'Berhasil mengunggah file ": name".',
    'must_exist'                     => 'ID di bidang :attribute tidak ada di database.',
    'all_accounts_equal'             => 'Semua akun di bidang ini harus sama.',
    'group_title_mandatory'          => 'Sebuah judul grup wajib diisi bila terdapat lebih dari satu transaksi.',
    'transaction_types_equal'        => 'Semua pisahan harus mempunyai jenis yang sama.',
    'invalid_transaction_type'       => 'Jenis transaksi tidak valid.',
    'invalid_selection'              => 'Pilihan Anda tidak valid.',
    'belongs_user'                   => 'Nilai ini tidak sah untuk bidang ini.',
    'at_least_one_transaction'       => 'Minimal harus ada satu transaksi.',
    'recurring_transaction_id'       => 'Need at least one transaction.',
    'need_id_to_match'               => 'You need to submit this entry with an ID for the API to be able to match it.',
    'too_many_unmatched'             => 'Too many submitted transactions cannot be matched to their respective database entries. Make sure existing entries have a valid ID.',
    'id_does_not_match'              => 'Submitted ID #:id does not match expected ID. Make sure it matches or omit the field.',
    'at_least_one_repetition'        => 'Minimal harus ada satu pengulangan.',
    'require_repeat_until'           => 'Dibutuhkan hanya sebuah angka pengulangan, atau tanggal akhir (repeat_until). Bukan keduanya.',
    'require_currency_info'          => 'Isi dalam bidang ini tidak valid jika tidak disertai informasi mata uang.',
    'not_transfer_account'           => 'Akun ini bukan sebuah akun yang dapat digunakan untuk transfer.',
    'require_currency_amount'        => 'Isi dalam bidang ini tidak valid jika tidak disertai informasi jumlah mata uang asing.',
    'require_foreign_currency'       => 'This field requires a number',
    'require_foreign_dest'           => 'This field value must match the currency of the destination account.',
    'require_foreign_src'            => 'This field value must match the currency of the source account.',
    'equal_description'              => 'Deskripsi transaksi harus berbeda dari deskripsi umum.',
    'file_invalid_mime'              => 'File ":name" adalah tipe ":mime" yang tidak diterima sebagai upload baru.',
    'file_too_large'                 => 'File "; name" terlalu besar.',
    'belongs_to_user'                => 'Nilai dari :attribute tidak diketahui.',
    'accepted'                       => ':attribute harus diterima.',
    'bic'                            => 'Ini bukan BIC yang valid.',
    'at_least_one_trigger'           => 'Aturan harus memiliki setidaknya satu pemicu.',
    'at_least_one_active_trigger'    => 'Rule must have at least one active trigger.',
    'at_least_one_action'            => 'Aturan harus memiliki setidaknya satu tindakan.',
    'at_least_one_active_action'     => 'Rule must have at least one active action.',
    'base64'                         => 'Ini bukanlah data base64 encoded yang valid.',
    'model_id_invalid'               => 'ID yang diberikan tidaklah valid untuk model ini.',
    'less'                           => ':attribute harus kurang dari 10,000,000',
    'active_url'                     => ':attribute bukan URL yang valid.',
    'after'                          => ':attribute harus tanggal setelah :date.',
    'date_after'                     => 'Tanggal awal harus sebelum tanggal akhir.',
    'alpha'                          => ':attribute hanya boleh berisi huruf.',
    'alpha_dash'                     => ':attribute hanya boleh berisi huruf, angka dan tanda hubung.',
    'alpha_num'                      => ':attribute hanya boleh berisi huruf dan angka.',
    'array'                          => ':attribute harus berupa array.',
    'unique_for_user'                => 'Sudah ada entri dengan :attribute ini.',
    'before'                         => ':attribute harus tanggal sebelum :date.',
    'unique_object_for_user'         => 'Nama ini sudah digunakan.',
    'unique_account_for_user'        => 'Nama akun ini sudah digunakan.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'between.numeric'            => ':attribute harus antara :min dan :max.',
    'between.file'               => ':attribute harus antara :min dan :max kilobyte.',
    'between.string'             => ':attribute harus antara :min dan :max karakter.',
    'between.array'              => ':attribute harus antara :min dan :max item.',
    'boolean'                    => 'Bidang :attribute harus benar atau salah.',
    'confirmed'                  => 'Konfirmasi :attribute tidak cocok.',
    'date'                       => ':attribute bukan tanggal yang valid.',
    'date_format'                => ':attribute tidak cocok dengan the format :format.',
    'different'                  => ':attribute dan :other harus berbeda.',
    'digits'                     => ':attribute harus angka :digits.',
    'digits_between'             => ':attribute harus antara :min dan :max angka.',
    'email'                      => ':attribute harus alamat email yang valid.',
    'filled'                     => 'Bidang :attribute diperlukan.',
    'exists'                     => ':attribute yang dipilih tidak valid.',
    'image'                      => ':attribute harus gambar.',
    'in'                         => ':attribute yang dipilih tidak valid.',
    'integer'                    => ':attribute harus bilangan bulat.',
    'ip'                         => ':attribute harus alamat IP yang valid.',
    'json'                       => ':attribute harus string JSON yang valid.',
    'max.numeric'                => ':attribute tidak boleh lebih besar dari :max.',
    'max.file'                   => ':attribute tidak boleh lebih besar dari kilobyte :max.',
    'max.string'                 => ':attribute tidak boleh lebih besar dari karakter :max.',
    'max.array'                  => ':attribute tidak boleh memiliki lebih dari item :max.',
    'mimes'                      => ':attribute harus jenis file: :values.',
    'min.numeric'                => ':attribute harus sedikitnya :min.',
    'lte.numeric'                => ':attribute harus kurang dari atau sama dengan :value.',
    'min.file'                   => 'Atribut harus minimal kilobyte :min.',
    'min.string'                 => ':attribute harus minimal karakter :min.',
    'min.array'                  => ':attribute harus minimal item :min.',
    'not_in'                     => ':attribute yang dipilih tidak valid.',
    'numeric'                    => ':attribute harus angka.',
    'numeric_native'             => 'Nilai asli haruslah berupa angka.',
    'numeric_destination'        => 'Nilai tujuan haruslah berupa angka.',
    'numeric_source'             => 'Nilai asal haruslah berupa angka.',
    'regex'                      => 'Format :attribute tidak valid.',
    'required'                   => 'Bidang :attribute diperlukan.',
    'required_if'                => 'Bidang :attribute diperlukan ketika :other adalah :value.',
    'required_unless'            => 'Bidang :attribute diperlukan minimal :other adalah dalam :values.',
    'required_with'              => 'Bidang :attribute diperlukan ketika :values terdapat nilai.',
    'required_with_all'          => 'Bidang :attribute diperlukan ketika :values ada.',
    'required_without'           => 'Bidang :attribute diperlukan ketika :values tidak ada.',
    'required_without_all'       => 'Bidang :attribute diperlukan ketika tidak ada satupun :values ada.',
    'same'                       => ':attribute dan :other harus cocok.',
    'size.numeric'               => ':attribute harus :size.',
    'amount_min_over_max'        => 'Jumlah minimum tidak boleh lebih besar dari jumlah maksimum.',
    'size.file'                  => ':attribute harus kilobyte :size.',
    'size.string'                => ':attribute harus karakter :size.',
    'size.array'                 => ':attribute harus berisi item :size.',
    'unique'                     => ':attribute sudah diambil.',
    'string'                     => ':attribute harus sebuah string.',
    'url'                        => 'Format atribut tidak valid.',
    'timezone'                   => ':attribute harus zona yang valid.',
    '2fa_code'                   => 'Bidang :attribute tidak valid.',
    'dimensions'                 => ':attribute memiliki dimensi gambar yang tidak valid.',
    'distinct'                   => 'Bidang :attribute memiliki nilai duplikat.',
    'file'                       => ':attribute harus berupa file.',
    'in_array'                   => 'Bidang :attribute tidak ada in :other.',
    'present'                    => 'Bidang :attribute harus ada.',
    'amount_zero'                => 'Jumlah total tidak boleh nol.',
    'current_target_amount'      => 'Jumlah saat ini harus kurang dari jumlah target.',
    'unique_piggy_bank_for_user' => 'Nama celengan harus unik.',
    'unique_object_group'        => 'Nama grup harus unik',
    'starts_with'                => 'Nilai harus di mulai dengan :values.',
    'unique_webhook'             => 'You already have a webhook with this combination of URL, trigger, response and delivery.',
    'unique_existing_webhook'    => 'You already have another webhook with this combination of URL, trigger, response and delivery.',
    'same_account_type'          => 'Kedua akun harus dari jenis akun yang sama',
    'same_account_currency'      => 'Kedua akun harus memiliki pengaturan mata uang yang sama',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'secure_password'             => 'Ini bukan sebuah kata sandi yang aman. Silahkan coba lagi. Untuk informasi lebih lanjut, kunjungi https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Tipe pengulangan yang tidak valid untuk transaksi berkala.',
    'valid_recurrence_rep_moment' => 'Waktu pengulangan tidaklah valid untuk tipe pengulangan ini.',
    'invalid_account_info'        => 'Informasi akun tidak valid.',
    'attributes'                  => [
        'email'                   => 'alamat email',
        'description'             => 'keterangan',
        'amount'                  => 'jumlah',
        'transactions.*.amount'   => 'jumlah transaksi',
        'name'                    => 'nama',
        'piggy_bank_id'           => 'celengan ID',
        'targetamount'            => 'target dana',
        'opening_balance_date'    => 'tanggal saldo awal',
        'opening_balance'         => 'saldo awal',
        'match'                   => 'cocok',
        'amount_min'              => 'jumlah minimal',
        'amount_max'              => 'jumlah maksimal',
        'title'                   => 'judul',
        'tag'                     => 'label',
        'transaction_description' => 'keterangan transaksi',
        'rule-action-value.1'     => 'nilai aturan tindakan #1',
        'rule-action-value.2'     => 'nilai aturan tindakan #2',
        'rule-action-value.3'     => 'nilai aturan tindakan #3',
        'rule-action-value.4'     => 'nilai aturan tindakan #4',
        'rule-action-value.5'     => 'nilai aturan tindakan #5',
        'rule-action.1'           => 'aturan tindakan #1',
        'rule-action.2'           => 'aturan tindakan #2',
        'rule-action.3'           => 'aturan tindakan #3',
        'rule-action.4'           => 'aturan tindakan #4',
        'rule-action.5'           => 'aturan tindakan #5',
        'rule-trigger-value.1'    => 'nilai pemicu aturan #1',
        'rule-trigger-value.2'    => 'nilai pemicu aturan #2',
        'rule-trigger-value.3'    => 'nilai pemicu aturan #3',
        'rule-trigger-value.4'    => 'nilai pemicu aturan #4',
        'rule-trigger-value.5'    => 'nilai pemicu aturan #5',
        'rule-trigger.1'          => 'pemicu aturan #1',
        'rule-trigger.2'          => 'pemicu aturan #2',
        'rule-trigger.3'          => 'pemicu aturan #3',
        'rule-trigger.4'          => 'pemicu aturan #4',
        'rule-trigger.5'          => 'pemicu aturan #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => 'Perlu untuk mendapatkan sebuah ID akun sumber yang valid dan/atau nama akun sumber yang valid untuk melanjutkan.',
    'withdrawal_source_bad_data'  => 'Tidak dapat menemukan sebuah akun sumber yang valid saat mencari ID ":id" atau nama ":name".',
    'withdrawal_dest_need_data'   => 'Perlu untuk mendapatkan sebuah ID akun tujuan yang valid dan/atau nama akun tujuan yang valid untuk melanjutkan.',
    'withdrawal_dest_bad_data'    => 'Tidak dapat menemukan sebuah akun tujuan yang valid saat mencari ID ":id" atau nama ":name".',

    'reconciliation_source_bad_data' => 'Could not find a valid reconciliation account when searching for ID ":id" or name ":name".',

    'generic_source_bad_data' => 'Tidak dapat menemukan sebuah akun sumber yang valid saat mencari ID ":id" atau nama ":name".',

    'deposit_source_need_data' => 'Perlu untuk mendapatkan sebuah ID akun sumber yang valid dan/atau nama akun sumber yang valid untuk melanjutkan.',
    'deposit_source_bad_data'  => 'Tidak dapat menemukan sebuah akun sumber yang valid saat mencari ID ":id" atau nama ":name".',
    'deposit_dest_need_data'   => 'Perlu untuk mendapatkan sebuah ID akun tujuan yang valid dan/atau nama akun tujuan yang valid untuk melanjutkan.',
    'deposit_dest_bad_data'    => 'Tidak dapat menemukan sebuah akun tujuan yang valid saat mencari ID ":id" atau nama ":name".',
    'deposit_dest_wrong_type'  => 'Akun tujuan yang dikirimkan bukan dari jenis yang benar.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'transfer_source_need_data' => 'Perlu untuk mendapatkan sebuah ID akun sumber yang valid dan/atau nama akun sumber yang valid untuk melanjutkan.',
    'transfer_source_bad_data'  => 'Tidak dapat menemukan sebuah akun sumber yang valid saat mencari ID ":id" atau nama ":name".',
    'transfer_dest_need_data'   => 'Perlu untuk mendapatkan sebuah ID akun tujuan yang valid dan/atau nama akun tujuan yang valid untuk melanjutkan.',
    'transfer_dest_bad_data'    => 'Tidak dapat menemukan sebuah akun tujuan yang valid saat mencari ID ":id" atau nama ":name".',
    'need_id_in_edit'           => 'Setiap pisahan harus memiliki transaction_journal_id (ID yang valid atau 0).',

    'ob_source_need_data'           => 'Perlu untuk mendapatkan sebuah ID akun sumber yang valid dan/atau nama akun sumber yang valid untuk melanjutkan.',
    'lc_source_need_data'           => 'Perlu untuk mendapatkan sebuah ID akun sumber yang valid untuk melanjutkan.',
    'ob_dest_need_data'             => 'Perlu untuk mendapatkan sebuah ID akun tujuan yang valid dan/atau nama akun tujuan yang valid untuk melanjutkan.',
    'ob_dest_bad_data'              => 'Tidak dapat menemukan sebuah akun tujuan yang valid saat mencari ID ":id" atau nama ":name".',
    'reconciliation_either_account' => 'To submit a reconciliation, you must submit either a source or a destination account. Not both, not neither.',

    'generic_invalid_source'      => 'Anda tidak dapat menggunakan akun ini sebagai akun sumber.',
    'generic_invalid_destination' => 'Anda tidak dapat menggunakan akun ini sebagai akun tujuan.',

    'generic_no_source'      => 'You must submit source account information or submit a transaction journal ID.',
    'generic_no_destination' => 'You must submit destination account information or submit a transaction journal ID.',

    'gte.numeric' => ':attribute harus lebih besar dari atau sama dengan :value.',
    'gt.numeric'  => ':attribute harus lebih besar dari :value.',
    'gte.file'    => ':attribute harus lebih besar dari atau sama dengan :value kilobytes.',
    'gte.string'  => ':attribute harus lebih besar dari atau sama dengan :value karakter.',
    'gte.array'   => ':attribute harus memiliki :value item atau lebih.',

    'amount_required_for_auto_budget' => 'Jumlah wajib diisi.',
    'auto_budget_amount_positive'     => 'Jumlah harus lebih dari kosong.',
    'auto_budget_period_mandatory'    => 'Periode anggaran otomatis adalah bidang yang wajib.',

    // no access to administration:
    'no_access_user_group'            => 'You do not have the correct access rights for this administration.',
];

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */
