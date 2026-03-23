/**
 * AI-Style Indian Recipe Image Generator
 * Generates beautiful, warm-toned food images using Canvas API
 * with Indian culinary aesthetics — saffron, turmeric, cardamom palettes
 */
(function () {
    'use strict';

    // roundRect polyfill
    if (!CanvasRenderingContext2D.prototype.roundRect) {
        CanvasRenderingContext2D.prototype.roundRect = function (x, y, w, h, r) {
            if (typeof r === 'number') r = [r, r, r, r];
            this.moveTo(x + r[0], y);
            this.lineTo(x + w - r[1], y);
            this.quadraticCurveTo(x + w, y, x + w, y + r[1]);
            this.lineTo(x + w, y + h - r[2]);
            this.quadraticCurveTo(x + w, y + h, x + w - r[2], y + h);
            this.lineTo(x + r[3], y + h);
            this.quadraticCurveTo(x, y + h, x, y + h - r[3]);
            this.lineTo(x, y + r[0]);
            this.quadraticCurveTo(x, y, x + r[0], y);
            this.closePath();
            return this;
        };
    }

    // Seeded random for consistent images across loads
    function seededRandom(seed) {
        let s = seed;
        return function () {
            s = (s * 16807) % 2147483647;
            return (s - 1) / 2147483646;
        };
    }

    // Indian-inspired color palettes for each food category
    const palettes = {
        desserts: {
            bg: ['#FBE8C3', '#F5C882', '#E8A849'],
            accent: '#D4892A', accent2: '#8B5E1A',
            text: '#6B3A1F',
            label: 'Gulab Jamun',
            sub: 'Jalebi  |  Rasgulla  |  Barfi'
        },
        baking: {
            bg: ['#FFF3E0', '#FFD9A0', '#F5BA6A'],
            accent: '#C4873A', accent2: '#8B5E2A',
            text: '#5C3310',
            label: 'Fresh Baked',
            sub: 'Naan  |  Kulcha  |  Cookies'
        },
        cakes: {
            bg: ['#FFF0F3', '#F5B0C0', '#E88DA0'],
            accent: '#C4506A', accent2: '#8B2545',
            text: '#6B1A35',
            label: 'Eggless Cakes',
            sub: 'Pastry  |  Cupcake  |  Fondant'
        },
        cooking: {
            bg: ['#F0E4D0', '#D4B896', '#C09A6B'],
            accent: '#8B6914', accent2: '#5C4A20',
            text: '#4A3520',
            label: 'Biryani',
            sub: 'Paneer  |  Dal Makhani  |  Korma'
        },
        healthy: {
            bg: ['#E8F5E9', '#A8D5B8', '#7BC496'],
            accent: '#3D8B5E', accent2: '#1B6B3E',
            text: '#1B4D2E',
            label: 'Healthy Kitchen',
            sub: 'Salad  |  Smoothie  |  Sprouts'
        },
        gifting: {
            bg: ['#F3E5F5', '#D1A8E0', '#BA7DD0'],
            accent: '#7B3F9E', accent2: '#5C1F7E',
            text: '#3D1A56',
            label: 'Gift Hampers',
            sub: 'Trousseau  |  Gourmet Box'
        },
        hero_desserts: {
            bg: ['#2C1810', '#4A2E1E', '#6A4430'],
            accent: '#FC880D', accent2: '#FFB74D',
            text: '#FFF8F0',
            label: 'Artisan Indian Desserts',
            sub: 'Handcrafted with love & tradition'
        },
        hero_cooking: {
            bg: ['#1E1410', '#3A261A', '#5A3E2A'],
            accent: '#FC880D', accent2: '#FFB74D',
            text: '#FFF8F0',
            label: 'Live Cooking Masterclass',
            sub: 'Learn from India\'s finest chefs'
        },
        hero_baking: {
            bg: ['#241810', '#3E2A18', '#5E4228'],
            accent: '#FC880D', accent2: '#FFB74D',
            text: '#FFF8F0',
            label: 'Baking Masterclass',
            sub: 'From oven to perfection'
        },
        hero_healthy: {
            bg: ['#0E1E0E', '#1A3A1A', '#2A5A2A'],
            accent: '#8BC34A', accent2: '#CDDC39',
            text: '#F0FFF0',
            label: 'Healthy Gourmet Kitchen',
            sub: 'Nutritious & delicious recipes'
        },
        chef: {
            bg: ['#2A1A10', '#4A3220', '#6A4A30'],
            accent: '#FC880D', accent2: '#FFB74D',
            text: '#FFF8F0',
            label: 'Sarika Jindal',
            sub: 'Founder & Head Chef'
        },
        feature: {
            bg: ['#FFF8F0', '#FFE8CC', '#FFD8A8'],
            accent: '#FC880D', accent2: '#E27A0C',
            text: '#4A2E14',
            label: 'Signature Creations',
            sub: 'Gauri Creations'
        },
    };

    // ---- DRAWING HELPERS ----

    function drawMandalaPattern(ctx, cx, cy, radius, color, petals, alpha) {
        ctx.save();
        ctx.globalAlpha = alpha || 0.12;
        ctx.strokeStyle = color;
        ctx.lineWidth = 1.5;
        // Petals
        for (let i = 0; i < petals; i++) {
            const angle = (Math.PI * 2 * i) / petals;
            ctx.beginPath();
            ctx.ellipse(
                cx + Math.cos(angle) * radius * 0.4,
                cy + Math.sin(angle) * radius * 0.4,
                radius * 0.35, radius * 0.15,
                angle, 0, Math.PI * 2
            );
            ctx.stroke();
        }
        // Inner petals
        for (let i = 0; i < petals; i++) {
            const angle = (Math.PI * 2 * i) / petals + Math.PI / petals;
            ctx.beginPath();
            ctx.ellipse(
                cx + Math.cos(angle) * radius * 0.2,
                cy + Math.sin(angle) * radius * 0.2,
                radius * 0.18, radius * 0.08,
                angle, 0, Math.PI * 2
            );
            ctx.stroke();
        }
        // Center dot
        ctx.fillStyle = color;
        ctx.beginPath();
        ctx.arc(cx, cy, radius * 0.08, 0, Math.PI * 2);
        ctx.fill();
        // Center circle
        ctx.beginPath();
        ctx.arc(cx, cy, radius * 0.15, 0, Math.PI * 2);
        ctx.stroke();
        // Outer circles
        ctx.beginPath();
        ctx.arc(cx, cy, radius * 0.75, 0, Math.PI * 2);
        ctx.stroke();
        ctx.beginPath();
        ctx.arc(cx, cy, radius * 0.85, 0, Math.PI * 2);
        ctx.stroke();
        ctx.restore();
    }

    function drawPaisley(ctx, x, y, size, color, rotation, alpha) {
        ctx.save();
        ctx.globalAlpha = alpha || 0.1;
        ctx.translate(x, y);
        ctx.rotate(rotation);
        ctx.fillStyle = color;
        ctx.beginPath();
        ctx.moveTo(0, -size);
        ctx.bezierCurveTo(size * 0.9, -size * 0.5, size * 0.9, size * 0.7, 0, size * 0.35);
        ctx.bezierCurveTo(-size * 0.9, size * 0.7, -size * 0.9, -size * 0.5, 0, -size);
        ctx.fill();
        // Inner detail
        ctx.globalAlpha = (alpha || 0.1) * 0.5;
        ctx.strokeStyle = color;
        ctx.lineWidth = 1;
        ctx.beginPath();
        ctx.moveTo(0, -size * 0.6);
        ctx.bezierCurveTo(size * 0.5, -size * 0.3, size * 0.5, size * 0.4, 0, size * 0.2);
        ctx.bezierCurveTo(-size * 0.5, size * 0.4, -size * 0.5, -size * 0.3, 0, -size * 0.6);
        ctx.stroke();
        ctx.restore();
    }

    function drawSpiceDots(ctx, w, h, color, rng, count) {
        ctx.save();
        ctx.fillStyle = color;
        var n = count || 80;
        for (var i = 0; i < n; i++) {
            var x = rng() * w;
            var y = rng() * h;
            var r = 1.5 + rng() * 5;
            ctx.globalAlpha = 0.03 + rng() * 0.06;
            ctx.beginPath();
            ctx.arc(x, y, r, 0, Math.PI * 2);
            ctx.fill();
        }
        ctx.restore();
    }

    function drawThali(ctx, cx, cy, radius, color, alpha) {
        ctx.save();
        ctx.globalAlpha = alpha || 0.15;
        ctx.strokeStyle = color;
        ctx.lineWidth = 2.5;
        ctx.beginPath();
        ctx.arc(cx, cy, radius, 0, Math.PI * 2);
        ctx.stroke();
        ctx.lineWidth = 1.5;
        ctx.beginPath();
        ctx.arc(cx, cy, radius * 0.88, 0, Math.PI * 2);
        ctx.stroke();
        ctx.beginPath();
        ctx.arc(cx, cy, radius * 0.92, 0, Math.PI * 2);
        ctx.stroke();
        // Scallops
        var scallops = 24;
        for (var i = 0; i < scallops; i++) {
            var angle = (Math.PI * 2 * i) / scallops;
            var sx = cx + Math.cos(angle) * radius * 0.95;
            var sy = cy + Math.sin(angle) * radius * 0.95;
            ctx.beginPath();
            ctx.arc(sx, sy, radius * 0.04, 0, Math.PI * 2);
            ctx.stroke();
        }
        ctx.restore();
    }

    function drawSteam(ctx, x, y, height, color, alpha) {
        ctx.save();
        ctx.globalAlpha = alpha || 0.18;
        ctx.strokeStyle = color;
        ctx.lineWidth = 2.5;
        ctx.lineCap = 'round';
        for (var i = 0; i < 3; i++) {
            var offsetX = (i - 1) * 20;
            ctx.beginPath();
            ctx.moveTo(x + offsetX, y);
            for (var j = 1; j <= 5; j++) {
                var py = y - (height / 5) * j;
                var px = x + offsetX + Math.sin(j * 1.2 + i) * 12;
                ctx.lineTo(px, py);
            }
            ctx.stroke();
        }
        ctx.restore();
    }

    function drawFoodBowl(ctx, cx, cy, size, color, alpha) {
        ctx.save();
        ctx.globalAlpha = alpha || 0.22;
        ctx.fillStyle = color;
        // Bowl body
        ctx.beginPath();
        ctx.moveTo(cx - size * 0.5, cy);
        ctx.quadraticCurveTo(cx - size * 0.45, cy + size * 0.5, cx, cy + size * 0.45);
        ctx.quadraticCurveTo(cx + size * 0.45, cy + size * 0.5, cx + size * 0.5, cy);
        ctx.closePath();
        ctx.fill();
        // Food mound
        ctx.globalAlpha = (alpha || 0.22) * 1.2;
        ctx.beginPath();
        ctx.ellipse(cx, cy - size * 0.02, size * 0.42, size * 0.14, 0, 0, Math.PI * 2);
        ctx.fill();
        // Rim highlight
        ctx.strokeStyle = color;
        ctx.lineWidth = 2;
        ctx.globalAlpha = (alpha || 0.22) * 0.6;
        ctx.beginPath();
        ctx.ellipse(cx, cy, size * 0.5, size * 0.1, 0, 0, Math.PI * 2);
        ctx.stroke();
        ctx.restore();
    }

    function drawRangoliBorder(ctx, w, h, color, alpha) {
        ctx.save();
        ctx.globalAlpha = alpha || 0.1;
        ctx.strokeStyle = color;
        ctx.fillStyle = color;
        ctx.lineWidth = 1.5;
        var margin = 25;
        var step = 35;
        // Top and bottom decorative dots and dashes
        for (var x = margin; x < w - margin; x += step) {
            // Top
            ctx.beginPath();
            ctx.arc(x, margin, 4, 0, Math.PI * 2);
            ctx.fill();
            ctx.beginPath();
            ctx.arc(x + step * 0.5, margin, 2.5, 0, Math.PI * 2);
            ctx.fill();
            // Bottom
            ctx.beginPath();
            ctx.arc(x, h - margin, 4, 0, Math.PI * 2);
            ctx.fill();
            ctx.beginPath();
            ctx.arc(x + step * 0.5, h - margin, 2.5, 0, Math.PI * 2);
            ctx.fill();
        }
        // Side borders
        for (var y = margin; y < h - margin; y += step) {
            ctx.beginPath();
            ctx.arc(margin, y, 3, 0, Math.PI * 2);
            ctx.fill();
            ctx.beginPath();
            ctx.arc(w - margin, y, 3, 0, Math.PI * 2);
            ctx.fill();
        }
        // Corner mandalas
        var cornerR = 35;
        drawMiniMandala(ctx, margin + 10, margin + 10, cornerR, color);
        drawMiniMandala(ctx, w - margin - 10, margin + 10, cornerR, color);
        drawMiniMandala(ctx, margin + 10, h - margin - 10, cornerR, color);
        drawMiniMandala(ctx, w - margin - 10, h - margin - 10, cornerR, color);
        ctx.restore();
    }

    function drawMiniMandala(ctx, cx, cy, r, color) {
        ctx.strokeStyle = color;
        ctx.lineWidth = 1;
        ctx.beginPath();
        ctx.arc(cx, cy, r, 0, Math.PI * 2);
        ctx.stroke();
        ctx.beginPath();
        ctx.arc(cx, cy, r * 0.5, 0, Math.PI * 2);
        ctx.stroke();
        for (var i = 0; i < 8; i++) {
            var angle = (Math.PI * 2 * i) / 8;
            ctx.beginPath();
            ctx.moveTo(cx + Math.cos(angle) * r * 0.5, cy + Math.sin(angle) * r * 0.5);
            ctx.lineTo(cx + Math.cos(angle) * r, cy + Math.sin(angle) * r);
            ctx.stroke();
        }
    }

    // Draw a spoon shape
    function drawSpoon(ctx, x, y, size, angle, color, alpha) {
        ctx.save();
        ctx.globalAlpha = alpha || 0.12;
        ctx.translate(x, y);
        ctx.rotate(angle);
        ctx.fillStyle = color;
        // Handle
        ctx.beginPath();
        ctx.rect(-size * 0.04, 0, size * 0.08, size * 0.7);
        ctx.fill();
        // Bowl of spoon
        ctx.beginPath();
        ctx.ellipse(0, -size * 0.1, size * 0.12, size * 0.18, 0, 0, Math.PI * 2);
        ctx.fill();
        ctx.restore();
    }

    // Draw decorative grain/rice texture
    function drawGrainTexture(ctx, w, h, color, rng) {
        ctx.save();
        ctx.fillStyle = color;
        for (var i = 0; i < 40; i++) {
            var gx = rng() * w;
            var gy = rng() * h;
            var angle = rng() * Math.PI;
            ctx.globalAlpha = 0.04 + rng() * 0.04;
            ctx.save();
            ctx.translate(gx, gy);
            ctx.rotate(angle);
            ctx.beginPath();
            ctx.ellipse(0, 0, 2, 5, 0, 0, Math.PI * 2);
            ctx.fill();
            ctx.restore();
        }
        ctx.restore();
    }

    // ---- MAIN IMAGE GENERATION ----

    function generateImage(type, width, height) {
        var canvas = document.createElement('canvas');
        canvas.width = width;
        canvas.height = height;
        var ctx = canvas.getContext('2d');
        var p = palettes[type] || palettes.desserts;
        var rng = seededRandom(type.length * 1000 + width + height);

        // Background gradient
        var grad = ctx.createLinearGradient(0, 0, width * 0.3, height);
        grad.addColorStop(0, p.bg[0]);
        grad.addColorStop(0.5, p.bg[1]);
        grad.addColorStop(1, p.bg[2]);
        ctx.fillStyle = grad;
        ctx.fillRect(0, 0, width, height);

        // Secondary diagonal gradient for richness
        var grad2 = ctx.createLinearGradient(width, 0, 0, height);
        grad2.addColorStop(0, 'rgba(255,255,255,0.05)');
        grad2.addColorStop(0.5, 'rgba(0,0,0,0)');
        grad2.addColorStop(1, 'rgba(0,0,0,0.08)');
        ctx.fillStyle = grad2;
        ctx.fillRect(0, 0, width, height);

        // Warm light source
        var radGrad = ctx.createRadialGradient(width * 0.35, height * 0.25, 0, width * 0.5, height * 0.5, width * 0.85);
        radGrad.addColorStop(0, 'rgba(255,248,240,0.12)');
        radGrad.addColorStop(1, 'rgba(0,0,0,0)');
        ctx.fillStyle = radGrad;
        ctx.fillRect(0, 0, width, height);

        var isHero = type.startsWith('hero_');
        var isChef = type === 'chef';
        var isFeature = type === 'feature';

        // ---- HERO BANNERS ----
        if (isHero) {
            drawGrainTexture(ctx, width, height, p.accent, rng);
            drawSpiceDots(ctx, width, height, p.accent2, rng, 120);
            drawRangoliBorder(ctx, width, height, p.accent, 0.08);

            // Large decorative mandala on right
            drawMandalaPattern(ctx, width * 0.82, height * 0.5, Math.min(width, height) * 0.4, p.accent, 14, 0.1);
            // Smaller mandala on left
            drawMandalaPattern(ctx, width * 0.12, height * 0.5, Math.min(width, height) * 0.2, p.accent2, 8, 0.06);

            // Food bowl with steam
            drawFoodBowl(ctx, width * 0.22, height * 0.52, Math.min(width, height) * 0.28, p.accent, 0.18);
            drawSteam(ctx, width * 0.22, height * 0.3, height * 0.28, p.accent2, 0.12);

            // Spoons
            drawSpoon(ctx, width * 0.38, height * 0.65, Math.min(width, height) * 0.3, -0.3, p.accent, 0.08);
            drawSpoon(ctx, width * 0.08, height * 0.7, Math.min(width, height) * 0.25, 0.2, p.accent2, 0.06);

            // Paisley decorations
            drawPaisley(ctx, width * 0.6, height * 0.15, 40, p.accent, 0.8, 0.08);
            drawPaisley(ctx, width * 0.95, height * 0.8, 35, p.accent2, -0.5, 0.06);

            // Hero text
            ctx.textAlign = 'center';
            ctx.fillStyle = p.text;
            ctx.globalAlpha = 0.5;
            ctx.font = 'bold ' + Math.floor(height * 0.1) + 'px Lora, Georgia, serif';
            ctx.fillText(p.label, width * 0.5, height * 0.44);
            ctx.globalAlpha = 0.3;
            ctx.font = '300 ' + Math.floor(height * 0.045) + 'px Poppins, sans-serif';
            ctx.fillText(p.sub, width * 0.5, height * 0.56);
            ctx.globalAlpha = 1;

            // Decorative divider line
            ctx.strokeStyle = p.accent;
            ctx.lineWidth = 2;
            ctx.globalAlpha = 0.3;
            ctx.beginPath();
            ctx.moveTo(width * 0.35, height * 0.62);
            ctx.lineTo(width * 0.65, height * 0.62);
            ctx.stroke();
            // Center diamond on line
            ctx.fillStyle = p.accent;
            ctx.save();
            ctx.translate(width * 0.5, height * 0.62);
            ctx.rotate(Math.PI / 4);
            ctx.fillRect(-5, -5, 10, 10);
            ctx.restore();
            ctx.globalAlpha = 1;

        // ---- CHEF PORTRAIT ----
        } else if (isChef) {
            drawGrainTexture(ctx, width, height, p.accent, rng);
            drawSpiceDots(ctx, width, height, p.accent, rng, 60);

            // Background mandala
            drawMandalaPattern(ctx, width * 0.5, height * 0.32, Math.min(width, height) * 0.28, p.accent, 10, 0.08);

            // Head silhouette circle
            ctx.save();
            ctx.globalAlpha = 0.15;
            var headGrad = ctx.createRadialGradient(width * 0.5, height * 0.28, 0, width * 0.5, height * 0.28, width * 0.2);
            headGrad.addColorStop(0, p.accent);
            headGrad.addColorStop(1, 'rgba(0,0,0,0)');
            ctx.fillStyle = headGrad;
            ctx.beginPath();
            ctx.arc(width * 0.5, height * 0.28, width * 0.2, 0, Math.PI * 2);
            ctx.fill();
            ctx.restore();

            // Chef hat
            ctx.save();
            ctx.globalAlpha = 0.25;
            ctx.fillStyle = p.accent;
            var hatCx = width * 0.5;
            var hatTop = height * 0.1;
            var hatW = width * 0.14;
            // Hat puffs
            ctx.beginPath();
            ctx.arc(hatCx - hatW * 0.3, hatTop, hatW * 0.35, 0, Math.PI * 2);
            ctx.fill();
            ctx.beginPath();
            ctx.arc(hatCx + hatW * 0.3, hatTop, hatW * 0.35, 0, Math.PI * 2);
            ctx.fill();
            ctx.beginPath();
            ctx.arc(hatCx, hatTop - hatW * 0.15, hatW * 0.35, 0, Math.PI * 2);
            ctx.fill();
            // Hat band
            ctx.fillRect(hatCx - hatW * 0.6, hatTop + hatW * 0.2, hatW * 1.2, hatW * 0.2);
            ctx.restore();

            // Body silhouette (shoulders)
            ctx.save();
            ctx.globalAlpha = 0.1;
            ctx.fillStyle = p.accent;
            ctx.beginPath();
            ctx.ellipse(width * 0.5, height * 0.52, width * 0.28, height * 0.15, 0, Math.PI, 0);
            ctx.fill();
            ctx.restore();

            // Paisley decorations
            drawPaisley(ctx, width * 0.1, height * 0.65, 45, p.accent, 0.5, 0.08);
            drawPaisley(ctx, width * 0.9, height * 0.7, 40, p.accent2, -0.4, 0.06);
            drawPaisley(ctx, width * 0.15, height * 0.85, 30, p.accent2, 1.2, 0.05);
            drawPaisley(ctx, width * 0.85, height * 0.9, 25, p.accent, -1.0, 0.05);

            // Name text
            ctx.fillStyle = p.text;
            ctx.textAlign = 'center';
            ctx.globalAlpha = 0.45;
            ctx.font = 'bold ' + Math.floor(height * 0.05) + 'px Lora, Georgia, serif';
            ctx.fillText(p.label, width * 0.5, height * 0.68);
            ctx.globalAlpha = 0.3;
            ctx.font = '300 ' + Math.floor(height * 0.03) + 'px Poppins, sans-serif';
            ctx.fillText(p.sub, width * 0.5, height * 0.73);
            ctx.globalAlpha = 1;

            // Decorative line under name
            ctx.strokeStyle = p.accent;
            ctx.lineWidth = 1.5;
            ctx.globalAlpha = 0.2;
            ctx.beginPath();
            ctx.moveTo(width * 0.3, height * 0.76);
            ctx.lineTo(width * 0.7, height * 0.76);
            ctx.stroke();
            ctx.globalAlpha = 1;

        // ---- FEATURE / CENTERPIECE ----
        } else if (isFeature) {
            drawGrainTexture(ctx, width, height, p.accent, rng);
            drawSpiceDots(ctx, width, height, p.accent2, rng, 80);

            // Large thali
            drawThali(ctx, width * 0.5, height * 0.48, Math.min(width, height) * 0.4, p.accent, 0.15);
            // Inner mandala
            drawMandalaPattern(ctx, width * 0.5, height * 0.48, Math.min(width, height) * 0.22, p.accent2, 12, 0.08);

            // Small bowls arranged in thali
            var bowlAngles = [0, Math.PI / 3, Math.PI * 2 / 3, Math.PI, Math.PI * 4 / 3, Math.PI * 5 / 3];
            var bowlR = Math.min(width, height) * 0.24;
            bowlAngles.forEach(function (a) {
                var bx = width * 0.5 + Math.cos(a) * bowlR;
                var by = height * 0.48 + Math.sin(a) * bowlR * 0.7;
                drawFoodBowl(ctx, bx, by, Math.min(width, height) * 0.08, p.accent, 0.15);
            });

            // Center bowl
            drawFoodBowl(ctx, width * 0.5, height * 0.48, Math.min(width, height) * 0.1, p.accent2, 0.18);
            drawSteam(ctx, width * 0.5, height * 0.28, height * 0.18, p.accent, 0.12);

            // Spoons
            drawSpoon(ctx, width * 0.15, height * 0.85, Math.min(width, height) * 0.25, -0.5, p.accent, 0.1);
            drawSpoon(ctx, width * 0.85, height * 0.85, Math.min(width, height) * 0.25, 0.5, p.accent2, 0.08);

            // Label
            ctx.fillStyle = p.text;
            ctx.textAlign = 'center';
            ctx.globalAlpha = 0.3;
            ctx.font = 'bold ' + Math.floor(height * 0.05) + 'px Lora, Georgia, serif';
            ctx.fillText(p.label, width * 0.5, height * 0.92);
            ctx.globalAlpha = 1;

        // ---- CATEGORY IMAGES ----
        } else {
            drawSpiceDots(ctx, width, height, p.accent, rng, 60);

            // Central mandala
            drawMandalaPattern(ctx, width * 0.5, height * 0.42, Math.min(width, height) * 0.28, p.accent, 10, 0.1);

            // Paisleys in corners
            drawPaisley(ctx, width * 0.12, height * 0.12, 30, p.accent, 0.4, 0.1);
            drawPaisley(ctx, width * 0.88, height * 0.12, 28, p.accent2, -0.4, 0.08);
            drawPaisley(ctx, width * 0.12, height * 0.88, 26, p.accent2, 1.0, 0.06);
            drawPaisley(ctx, width * 0.88, height * 0.88, 30, p.accent, -1.0, 0.08);

            if (type === 'cooking') {
                drawFoodBowl(ctx, width * 0.5, height * 0.38, Math.min(width, height) * 0.22, p.accent, 0.2);
                drawSteam(ctx, width * 0.5, height * 0.18, height * 0.2, p.accent, 0.15);
                drawSpoon(ctx, width * 0.72, height * 0.5, Math.min(width, height) * 0.2, -0.4, p.accent2, 0.1);
                drawGrainTexture(ctx, width, height, p.accent2, rng);
            } else if (type === 'cakes') {
                // 3-tier cake
                ctx.save();
                ctx.globalAlpha = 0.2;
                ctx.fillStyle = p.accent;
                var cw = width * 0.35;
                // Bottom tier
                ctx.beginPath();
                ctx.roundRect(width * 0.325, height * 0.38, cw, height * 0.1, 6);
                ctx.fill();
                // Middle tier
                ctx.beginPath();
                ctx.roundRect(width * 0.36, height * 0.28, cw * 0.8, height * 0.1, 6);
                ctx.fill();
                // Top tier
                ctx.fillStyle = p.accent2;
                ctx.beginPath();
                ctx.roundRect(width * 0.4, height * 0.2, cw * 0.55, height * 0.08, 4);
                ctx.fill();
                // Cherry on top
                ctx.fillStyle = p.accent;
                ctx.beginPath();
                ctx.arc(width * 0.5, height * 0.18, 8, 0, Math.PI * 2);
                ctx.fill();
                ctx.restore();
            } else if (type === 'healthy') {
                // Leaf pattern
                for (var li = 0; li < 7; li++) {
                    drawPaisley(ctx, width * (0.18 + li * 0.1), height * (0.35 + Math.sin(li) * 0.05), 18 + rng() * 12, p.accent, rng() * Math.PI, 0.12);
                }
                // Bowl of salad
                drawFoodBowl(ctx, width * 0.5, height * 0.42, Math.min(width, height) * 0.18, p.accent, 0.15);
            } else if (type === 'desserts') {
                // Round sweets (like laddu/gulab jamun)
                var sweetPositions = [[0.38, 0.32], [0.5, 0.3], [0.62, 0.32], [0.44, 0.42], [0.56, 0.42]];
                ctx.save();
                sweetPositions.forEach(function (pos) {
                    ctx.globalAlpha = 0.2;
                    ctx.fillStyle = p.accent;
                    ctx.beginPath();
                    ctx.arc(width * pos[0], height * pos[1], Math.min(width, height) * 0.06, 0, Math.PI * 2);
                    ctx.fill();
                    // Highlight
                    ctx.globalAlpha = 0.1;
                    ctx.fillStyle = '#fff';
                    ctx.beginPath();
                    ctx.arc(width * pos[0] - 4, height * pos[1] - 4, Math.min(width, height) * 0.02, 0, Math.PI * 2);
                    ctx.fill();
                });
                ctx.restore();
                // Plate
                drawThali(ctx, width * 0.5, height * 0.37, Math.min(width, height) * 0.2, p.accent2, 0.08);
            } else if (type === 'gifting') {
                // Gift box shape
                ctx.save();
                ctx.globalAlpha = 0.18;
                ctx.fillStyle = p.accent;
                var bx = width * 0.32, by = height * 0.28, bw = width * 0.36, bh = height * 0.25;
                ctx.beginPath();
                ctx.roundRect(bx, by, bw, bh, 8);
                ctx.fill();
                // Ribbon
                ctx.fillStyle = p.accent2;
                ctx.globalAlpha = 0.2;
                ctx.fillRect(bx + bw * 0.45, by, bw * 0.1, bh);
                ctx.fillRect(bx, by + bh * 0.45, bw, bh * 0.1);
                // Bow
                ctx.beginPath();
                ctx.ellipse(bx + bw * 0.5 - 12, by - 5, 14, 8, -0.3, 0, Math.PI * 2);
                ctx.fill();
                ctx.beginPath();
                ctx.ellipse(bx + bw * 0.5 + 12, by - 5, 14, 8, 0.3, 0, Math.PI * 2);
                ctx.fill();
                ctx.restore();
            } else {
                // Default - thali with bowls
                drawThali(ctx, width * 0.5, height * 0.4, Math.min(width, height) * 0.22, p.accent, 0.12);
                drawFoodBowl(ctx, width * 0.5, height * 0.4, Math.min(width, height) * 0.12, p.accent2, 0.15);
            }

            // Category label
            ctx.fillStyle = p.text;
            ctx.textAlign = 'center';
            ctx.globalAlpha = 0.3;
            ctx.font = '600 ' + Math.floor(Math.min(width, height) * 0.07) + 'px Poppins, sans-serif';
            ctx.fillText(p.label, width * 0.5, height * 0.72);
            ctx.globalAlpha = 0.2;
            ctx.font = '300 ' + Math.floor(Math.min(width, height) * 0.04) + 'px Poppins, sans-serif';
            ctx.fillText(p.sub, width * 0.5, height * 0.8);
            ctx.globalAlpha = 1;
        }

        // Vignette for depth
        var vig = ctx.createRadialGradient(width / 2, height / 2, width * 0.15, width / 2, height / 2, width * 0.95);
        vig.addColorStop(0, 'rgba(0,0,0,0)');
        vig.addColorStop(1, 'rgba(0,0,0,0.15)');
        ctx.fillStyle = vig;
        ctx.fillRect(0, 0, width, height);

        // Subtle noise texture overlay
        ctx.save();
        ctx.globalAlpha = 0.02;
        for (var ni = 0; ni < 3000; ni++) {
            var nx = rng() * width;
            var ny = rng() * height;
            ctx.fillStyle = rng() > 0.5 ? '#fff' : '#000';
            ctx.fillRect(nx, ny, 1, 1);
        }
        ctx.restore();

        return canvas.toDataURL('image/jpeg', 0.92);
    }

    // Mapping from asset filenames to generation types
    var imageMap = {
        'banner-desserts.png': { type: 'hero_desserts', w: 1400, h: 600 },
        'banner-cooking-class.png': { type: 'hero_cooking', w: 1400, h: 600 },
        'banner-baking.png': { type: 'hero_baking', w: 1400, h: 600 },
        'banner-healthy.png': { type: 'hero_healthy', w: 1400, h: 600 },
        'cat-desserts.png': { type: 'desserts', w: 400, h: 400 },
        'cat-baking.png': { type: 'baking', w: 400, h: 400 },
        'cat-cakes.png': { type: 'cakes', w: 400, h: 400 },
        'cat-cooking.png': { type: 'cooking', w: 400, h: 400 },
        'cat-healthy.png': { type: 'healthy', w: 400, h: 400 },
        'cat-gifting.png': { type: 'gifting', w: 400, h: 400 },
        'chef-portrait.png': { type: 'chef', w: 500, h: 650 },
        'chef-hero.png': { type: 'chef', w: 500, h: 650 },
        'banana-eclair.png': { type: 'feature', w: 500, h: 500 },
    };

    // Cache generated images to avoid re-generating
    var imageCache = {};

    function getGeneratedSrc(filename) {
        if (!imageMap[filename]) return null;
        if (!imageCache[filename]) {
            var config = imageMap[filename];
            imageCache[filename] = generateImage(config.type, config.w, config.h);
        }
        return imageCache[filename];
    }

    function processImage(img) {
        var src = img.getAttribute('src') || '';
        var filename = src.split('/').pop();
        if (filename === 'logo-removebg-preview.png') return;
        if (img.dataset.aiProcessed) return;
        var generated = getGeneratedSrc(filename);
        if (generated) {
            img.src = generated;
            img.style.objectFit = 'cover';
            img.dataset.aiProcessed = '1';
        }
    }

    function replaceImages() {
        document.querySelectorAll('img').forEach(processImage);
    }

    // Watch for dynamically added/changed images
    var observer = new MutationObserver(function (mutations) {
        mutations.forEach(function (m) {
            // New nodes
            m.addedNodes.forEach(function (node) {
                if (node.nodeName === 'IMG') processImage(node);
                if (node.querySelectorAll) {
                    node.querySelectorAll('img').forEach(processImage);
                }
            });
            // Attribute changes on img src
            if (m.type === 'attributes' && m.target.nodeName === 'IMG' && m.attributeName === 'src') {
                m.target.dataset.aiProcessed = '';
                processImage(m.target);
            }
        });
    });

    function init() {
        replaceImages();
        observer.observe(document.body, {
            childList: true,
            subtree: true,
            attributes: true,
            attributeFilter: ['src']
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
