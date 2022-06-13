package com.example.onlineshope3;

import androidx.room.Database;
import androidx.room.RoomDatabase;

import .com.example.onlineshope3.LaundryDao;
import .com.example.onlineshope3ModelLaundry;



@Database(entities = {ModelOnlineshop.class}, version = 1)
public abstract class AppDatabase extends RoomDatabase {
    public abstract OnlineshopDao laundryDao();
}
