var newman = require('newman');

/**
 * @see https://www.npmjs.com/package/newman
 */
newman.run({
    //collection: require('./docs/postman/collection.json'),//集合
    collection: 'https://www.getpostman.com/collections/145656-71cc0624-18ee-5cd6-9248-640c18520338-6nASWZ5',//集合
    environment: require('./docs/postman/Development.environment.json'),//环境变量
    //globals: require('./docs/postman/globals.json'),//全局变量
    iterationCount: 1,//要在集合上运行的迭代次数
    iterationData: require('./docs/postman/data.json'),
    //folder: '',//运行集合中的文件夹而不是整个集合
    ignoreRedirects: false,//是否会自动遵循来自服务器的3xx响应
    insecure: false,//禁用SSL验证
    reporters: 'cli'
}, function (err) {
    if (err) {
        throw err;
    }
    console.log('collection run complete!');
});