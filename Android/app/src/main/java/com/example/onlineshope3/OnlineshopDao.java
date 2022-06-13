package com.example.onlineshope3;

import androidx.lifecycle.LiveData;
import androidx.room.Dao;
import androidx.room.Insert;
import androidx.room.OnConflictStrategy;
import androidx.room.Query;

import com.azhar.laundry.model.ModelLaundry;

import java.util.List;


@Dao
public interface OnlineshopDao {

    @Query("SELECT * FROM ModelOnlineshop")
    LiveData<List<ModelOnlineshop>> getAll();

    @Insert(onConflict = OnConflictStrategy.REPLACE)
    void insertData(ModelOnlineshop... modelLaundries);

    @Query("DELETE FROM ModelOnlineshop WHERE uid= :uid")
    void deleteSingleData(int uid);

}
