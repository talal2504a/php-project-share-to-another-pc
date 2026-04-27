# Cline aur Nai - Usage Guide

## 1. CLINE (AI Coding Assistant)

Cline ko use karne ke liye terminal mein yeh command run karein:

```bash
cline
```

**Agar PowerShell error aaye (execution policy),** toh yeh try karein:

### Option A
npx cline
```

Is se ek interactive AI assistant start hoga jo aap se sawal karega ke aap ko kya code chahiye.

**Example:**
```bash
cline
# Phir bolain: "mujhe ek simple HTML form banao"
```

---

## 2. NAI (Template Engine)

NAI ko Node.js project mein use karne ka tareeqa:

### Step 1: Project setup
```bash
mkdir myapp
cd myapp
npm init -y
npm install nai
```

### Step 2: Template file banayein (`template.html`)
```html
<html>
<body>
  <h1>Hello {{name}}</h1>
  <p>Aap ki umar {{age}} hai</p>
</body>
</html>
```

### Step 3: Node.js script likhein (`app.js`)
```javascript
const nai = require('nai');

const template = `<html>
<body>
  <h1>Hello {{name}}</h1>
  <p>Aap ki umar {{age}} hai</p>
</body>
</html>`;

const data = {
  name: 'Talal',
  age: 20
};

nai.render(template, data)
  .then(result => {
    console.log(result);
  });
```

### Step 4: Run karein
```bash
node app.js
```

**Output:**
```html
<html>
<body>
  <h1>Hello Talal</h1>
  <p>Aap ki umar 20 hai</p>
</body>
</html>
```

---

## Summary
- **Cline** = AI se baat karke code banwana (terminal mein `cline` likhain)
- **NAI** = Templates mein dynamic data inject karna (Node.js code mein use hota hai)
