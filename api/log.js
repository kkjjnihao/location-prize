export default async function handler(req, res) {
  if (req.method === 'POST') {
    const log = {
      timestamp: new Date().toISOString(),
      ip: req.headers['x-forwarded-for'] || req.connection.remoteAddress,
      userAgent: req.headers['user-agent'],
      location: req.body
    };

    console.log("🎯 收到位置数据:\n", JSON.stringify(log, null, 2));
    return res.status(200).json({ success: true });
  }

  res.status(405).json({ error: 'Method not allowed' });
}
