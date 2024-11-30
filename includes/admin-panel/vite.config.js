import { defineConfig } from "vite";
import react from "@vitejs/plugin-react";

export default defineConfig({
  plugins: [react()],
  cacheDir: "node_modules/.vite", // Use node_modules as cache storage
  build: {
    rollupOptions: {
      output: {
        entryFileNames: "index.js", // JS output file name
        assetFileNames: "style.css", // CSS output file name
        format: "es", // ES module format
      },
    },
    outDir: "dist", // Build output directory
    assetsDir: "", // Place CSS alongside JS
    emptyOutDir: true, // Clear output directory before building
    cssCodeSplit: false, // Bundle all CSS into a single file
  },
});
