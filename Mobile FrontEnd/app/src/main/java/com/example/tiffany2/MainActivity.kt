package com.example.tiffany2

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.menu)

        val btn_booking:Button = findViewById(R.id.btn_Booking)
        val btn_antrian:Button = findViewById(R.id.btn_Antrian)
        val btn_informasi:Button = findViewById(R.id.btn_Informasi)

        btn_booking.setOnClickListener{
            val intent = Intent(this,BookingActivity::class.java)
            startActivity(intent)
        }
        btn_antrian.setOnClickListener{
            val intent = Intent(this,AntrianActivity::class.java)
            startActivity(intent)
        }
        btn_informasi.setOnClickListener {
            val intent = Intent(this,InformasiActivity::class.java)
            startActivity(intent)
        }

    }

}