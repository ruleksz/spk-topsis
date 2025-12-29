import sys
import joblib
import pandas as pd

kenyamanan = float(sys.argv[1])
keamanan   = float(sys.argv[2])
performa   = float(sys.argv[3])
irit_bbm   = float(sys.argv[4])
harga      = float(sys.argv[5])

model = joblib.load('mobil_model.pkl')

X = pd.DataFrame([{
    'kenyamanan': kenyamanan,
    'keamanan': keamanan,
    'performa': performa,
    'irit_bbm': irit_bbm,
    'harga': harga
}])

prediksi = model.predict(X)
print(round(prediksi[0], 4))
