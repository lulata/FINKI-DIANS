const { defineConfig } = require("@vue/cli-service");
module.exports = defineConfig({
  transpileDependencies: true,
  devServer: {
    proxy: {
      "^/api": {
        pathRewrite: { "^/api": "/api" },
        target: "https://dians.ddcode.co/",
        changeOrigin: true,
      },
    },
  },
});
