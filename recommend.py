import streamlit as st
import pickle
import pandas as pd

st.title('Tourism services and security')

places_dict=pickle.load(open('Review_dict.pkl','rb'))
places=pd.DataFrame(places_dict)
print(pd.DataFrame.columns)

selected_place = st.selectbox('Enter the location or place you are interested to visit..',
    places['Place'].values)

if st.button('Recommend'):
        st.write(selected_place)