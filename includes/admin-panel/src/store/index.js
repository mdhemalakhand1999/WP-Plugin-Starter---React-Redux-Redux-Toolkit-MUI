import { createSlice, configureStore } from "@reduxjs/toolkit";

const countSlice = createSlice({
  name: "counter",
  initialState: {
    numVal: 0,
  },
  reducers: {
    increment: (state) => {
      state.numVal++;
    },
  },
});

const countStore = configureStore({
  reducer: {
    counter: countSlice.reducer,
  },
});

export const countAction = countSlice.actions;
export default countStore;
