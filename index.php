* {
.content h2 {
  font-size: 42px;
  margin-bottom: 40px;
  color: red;
}

.grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
}

.card {
  background: #111;
  border: 1px solid #222;
  padding: 30px;
  border-radius: 20px;
  transition: 0.3s;
}

.card:hover {
  border-color: red;
  transform: translateY(-5px);
}

.faq-item {
  margin-bottom: 30px;
}

.cta-section {
  padding: 100px 20px;
  text-align: center;
}

footer {
  padding: 40px 20px;
  border-top: 1px solid #222;
  text-align: center;
}

.socials {
  margin-bottom: 20px;
}

.socials a {
  color: white;
  text-decoration: none;
}

@media(max-width:768px) {
  .hero-title {
    font-size: 48px;
  }

  .hero-subtitle {
    font-size: 18px;
  }
}
