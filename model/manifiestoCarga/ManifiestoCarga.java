/**
 * 
 */
package org.sieca.everis.pdcc.model.manifiestoCarga;

/**
 * @author ytorregl
 *
 */
public class ManifiestoCarga {
	
	private String numeroManifiesto;
	private String tipoManifiesto;
	private String modoTransporte;
	private String fechaManifiesto;
	private String fechaPrevistaLlegada;
	private String lugarSalida;
	private String lugarDestino;
	private double cantidadConocimientoEmbarque;
	/**
	 * 
	 */
	public ManifiestoCarga() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param numeroManifiesto
	 * @param tipoManifiesto
	 * @param modoTransporte
	 * @param fechaManifiesto
	 * @param fechaPrevistaLlegada
	 * @param lugarSalida
	 * @param lugarDestino
	 * @param cantidadConocimientoEmbarque
	 */
	public ManifiestoCarga(String numeroManifiesto, String tipoManifiesto, String modoTransporte,
			String fechaManifiesto, String fechaPrevistaLlegada, String lugarSalida, String lugarDestino,
			double cantidadConocimientoEmbarque) {
		super();
		this.numeroManifiesto = numeroManifiesto;
		this.tipoManifiesto = tipoManifiesto;
		this.modoTransporte = modoTransporte;
		this.fechaManifiesto = fechaManifiesto;
		this.fechaPrevistaLlegada = fechaPrevistaLlegada;
		this.lugarSalida = lugarSalida;
		this.lugarDestino = lugarDestino;
		this.cantidadConocimientoEmbarque = cantidadConocimientoEmbarque;
	}
	/**
	 * @return the numeroManifiesto
	 */
	public String getNumeroManifiesto() {
		return numeroManifiesto;
	}
	/**
	 * @param numeroManifiesto the numeroManifiesto to set
	 */
	public void setNumeroManifiesto(String numeroManifiesto) {
		this.numeroManifiesto = numeroManifiesto;
	}
	/**
	 * @return the tipoManifiesto
	 */
	public String getTipoManifiesto() {
		return tipoManifiesto;
	}
	/**
	 * @param tipoManifiesto the tipoManifiesto to set
	 */
	public void setTipoManifiesto(String tipoManifiesto) {
		this.tipoManifiesto = tipoManifiesto;
	}
	/**
	 * @return the modoTransporte
	 */
	public String getModoTransporte() {
		return modoTransporte;
	}
	/**
	 * @param modoTransporte the modoTransporte to set
	 */
	public void setModoTransporte(String modoTransporte) {
		this.modoTransporte = modoTransporte;
	}
	/**
	 * @return the fechaManifiesto
	 */
	public String getFechaManifiesto() {
		return fechaManifiesto;
	}
	/**
	 * @param fechaManifiesto the fechaManifiesto to set
	 */
	public void setFechaManifiesto(String fechaManifiesto) {
		this.fechaManifiesto = fechaManifiesto;
	}
	/**
	 * @return the fechaPrevistaLlegada
	 */
	public String getFechaPrevistaLlegada() {
		return fechaPrevistaLlegada;
	}
	/**
	 * @param fechaPrevistaLlegada the fechaPrevistaLlegada to set
	 */
	public void setFechaPrevistaLlegada(String fechaPrevistaLlegada) {
		this.fechaPrevistaLlegada = fechaPrevistaLlegada;
	}
	/**
	 * @return the lugarSalida
	 */
	public String getLugarSalida() {
		return lugarSalida;
	}
	/**
	 * @param lugarSalida the lugarSalida to set
	 */
	public void setLugarSalida(String lugarSalida) {
		this.lugarSalida = lugarSalida;
	}
	/**
	 * @return the lugarDestino
	 */
	public String getLugarDestino() {
		return lugarDestino;
	}
	/**
	 * @param lugarDestino the lugarDestino to set
	 */
	public void setLugarDestino(String lugarDestino) {
		this.lugarDestino = lugarDestino;
	}
	/**
	 * @return the cantidadConocimientoEmbarque
	 */
	public double getCantidadConocimientoEmbarque() {
		return cantidadConocimientoEmbarque;
	}
	/**
	 * @param cantidadConocimientoEmbarque the cantidadConocimientoEmbarque to set
	 */
	public void setCantidadConocimientoEmbarque(double cantidadConocimientoEmbarque) {
		this.cantidadConocimientoEmbarque = cantidadConocimientoEmbarque;
	}
	

}
