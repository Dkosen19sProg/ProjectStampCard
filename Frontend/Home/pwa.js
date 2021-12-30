if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('./sw.js').then(function(registration) {
        //登録完了
        console.log('登録成功');
    }).catch(function(err) {
        //登録失敗
        console.log('失敗');
    })
}