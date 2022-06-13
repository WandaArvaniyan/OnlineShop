package com.example.onlineshope3;

import android.app.Application;

import androidx.annotation.NonNull;
import androidx.lifecycle.AndroidViewModel;
import androidx.lifecycle.LiveData;

import com.azhar.laundry.database.DatabaseClient;
import com.azhar.laundry.database.dao.LaundryDao;
import com.azhar.laundry.model.ModelLaundry;

import java.util.List;

import io.reactivex.rxjava3.android.schedulers.AndroidSchedulers;
import io.reactivex.rxjava3.core.Completable;
import io.reactivex.rxjava3.schedulers.Schedulers;


public class OnlineshopViewModel extends AndroidViewModel {

    LiveData<List<ModelOnlineshop>> mModelLaundry;
    OnlineshopDao laundryDao;

    public OnlineshopViewModel(@NonNull Application application) {
        super(application);

        laundryDao = DatabaseClient.getInstance(application).getAppDatabase().laundryDao();
        mModelLaundry = laundryDao.getAll();
    }

    public LiveData<List<ModelOnlineshop>> getDataLaundry() {
        return mModelLaundry;
    }

    public void deleteDataById(final int uid) {
        Completable.fromAction(() -> laundryDao.deleteSingleData(uid))
                .subscribeOn(Schedulers.io())
                .observeOn(AndroidSchedulers.mainThread())
                .subscribe();
    }

}
