import pandas as pd
from sklearn.linear_model import LinearRegression
import joblib

# Load dataset
data = pd.read_csv('dataset_mobil.csv')

X = data[['kenyamanan', 'keamanan', 'performa', 'irit_bbm', 'harga']]
y = data['target']

# Train model
model = LinearRegression()
model.fit(X, y)

# Save model
joblib.dump(model, 'mobil_model.pkl')

print("Model berhasil dilatih dan disimpan")
