package com.inatama.ponorogoaksi;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.content.ContextCompat;
import androidx.core.widget.NestedScrollView;
import androidx.swiperefreshlayout.widget.SwipeRefreshLayout;

import android.annotation.TargetApi;
import android.graphics.Bitmap;
import android.os.Build;
import android.os.Bundle;
import android.os.Handler;
import android.util.Log;
import android.view.KeyEvent;
import android.view.Window;
import android.view.WindowManager;
import android.webkit.WebResourceRequest;
import android.webkit.WebResourceResponse;
import android.webkit.WebView;
import android.webkit.WebViewClient;

import okhttp3.Call;
import okhttp3.OkHttpClient;
import okhttp3.Request;
import okhttp3.Response;

public class MainActivity extends AppCompatActivity {

    WebView webView;
    SwipeRefreshLayout mySwipeRefreshLayout;
    private OkHttpClient okHttpClient = new OkHttpClient.Builder().build();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        Window window = getWindow();

        window.clearFlags(WindowManager.LayoutParams.FLAG_TRANSLUCENT_STATUS);

        window.addFlags(WindowManager.LayoutParams.FLAG_DRAWS_SYSTEM_BAR_BACKGROUNDS);

        window.setStatusBarColor(ContextCompat.getColor(this,R.color.my_statusbar_color));
        webView = (WebView) findViewById(R.id.webview);
        mySwipeRefreshLayout = (SwipeRefreshLayout)this.findViewById(R.id.swipeContainer);
        webView.setWebViewClient(new myWebclient());
        webView.getSettings().setJavaScriptEnabled(true);

        webView.loadUrl("https://donation.inatama.com");
        mySwipeRefreshLayout.setOnRefreshListener(
                new SwipeRefreshLayout.OnRefreshListener() {
                    @Override
                    public void onRefresh() {
                        webView.reload();
                        final Handler handler = new Handler();
                        handler.postDelayed(new Runnable() {
                            @Override
                            public void run() {
                                if(mySwipeRefreshLayout.isRefreshing()) {
                                mySwipeRefreshLayout.setRefreshing(false);
                                }
                            }
                        }, 1000);
                    }
                }
        );
    }

    private void updateScreenTitle(String title) {
        setTitle(title);
    }

    public class myWebclient extends WebViewClient{
        @Override
        public void onPageFinished(WebView view, String url) {
            super.onPageFinished(view, url);
//            bar.setVisibility(View.GONE);
        }

        @Override
        public void onPageStarted(WebView view, String url, Bitmap favicon) {
            super.onPageStarted(view, url, favicon);
        }

        @Override
        public boolean shouldOverrideUrlLoading(WebView view, String url) {
            view.loadUrl(url);
            return super.shouldOverrideUrlLoading(view, url);
        }
    }

    @Override
    public boolean onKeyDown(int keyCode, KeyEvent event) {
        if((keyCode== KeyEvent.KEYCODE_BACK) && webView.canGoBack()){
            webView.goBack();
            return true;
        }

        return super.onKeyDown(keyCode, event);
    }
}
