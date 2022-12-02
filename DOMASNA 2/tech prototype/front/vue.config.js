const { defineConfig } = require("@vue/cli-service");
module.exports = defineConfig({
  transpileDependencies: true,
  devServer: {
    proxy: {
      "^/api": {
        pathRewrite: { "^/api": "/api" },
        target: "https://dians.ddcode.co/",
        // target: "http://127.0.0.1:8000",
        changeOrigin: true,
      },
    },
  },
});
