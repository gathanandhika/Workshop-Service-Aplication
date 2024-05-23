package com.example.tiffany2

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.TextView
import java.util.*
import android.app.DatePickerDialog
import android.widget.DatePicker
import java.text.SimpleDateFormat

class BookingActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.booking)
        val buttondate:Button = findViewById(R.id.btn_datepicker)
        val textdate:TextView = findViewById(R.id.text_view_date)
        val c = Calendar.getInstance()
        val year = c.get(Calendar.YEAR)
        val month = c.get(Calendar.MONTH)
        val day = c.get(Calendar.DAY_OF_MONTH)

        buttondate.setOnClickListener {
            val datepick = DatePickerDialog(this,DatePickerDialog.OnDateSetListener{view, mYear,mMonth,mDay ->
                textdate.setText(""+mDay +"/"+(mMonth+1) +"/"+mYear)
            }, year, month, day)
            datepick.show()
        }
    }
}